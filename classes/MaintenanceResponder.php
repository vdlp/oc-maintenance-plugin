<?php

declare(strict_types=1);

namespace Vdlp\Maintenance\Classes;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Vdlp\Maintenance\Classes\Contracts\ResponseMaker;

final class MaintenanceResponder implements ResponseMaker
{
    public const HTTP_STATUS_CODE = 503;

    private Request $request;
    private ResponseFactory $responseFactory;
    private Translator $translator;
    private ViewFactory $view;
    private Repository $config;

    public function __construct(
        Request $request,
        ResponseFactory $responseFactory,
        Translator $translator,
        ViewFactory $view,
        Repository $config,
    ) {
        $this->request = $request;
        $this->responseFactory = $responseFactory;
        $this->translator = $translator;
        $this->view = $view;
        $this->config = $config;
    }

    public function getResponse(): Response
    {
        if ($this->request->ajax()) {
            if ($this->request->hasHeader('X-OCTOBER-REQUEST-HANDLER')) {
                return $this->responseFactory->make(
                    $this->translator->trans('vdlp.maintenance::lang.responses.ajax.message'),
                    config('vdlp_maintenance.http_status_code_ajax', self::HTTP_STATUS_CODE)
                );
            }

            return $this->responseFactory->json([
                'error' => $this->translator->trans('vdlp.maintenance::lang.responses.ajax.message'),
            ], config('vdlp_maintenance.http_status_code', self::HTTP_STATUS_CODE));
        }

        if (config('vdlp_maintenance.use_preferred_locale') === true) {
            $this->translator->setLocale($this->request->getPreferredLanguage());
        }

        $view = $this->view->file($this->getMaintenancePagePath(), [
            'locale' => $this->translator->getLocale(),
            'app_name' => $this->config->get('app.name'),
        ]);

        return $this->responseFactory->make($view, self::HTTP_STATUS_CODE);
    }

    private function getMaintenancePagePath(): string
    {
        if (file_exists($page = base_path('maintenance/503.htm'))) {
            return $page;
        }

        return __DIR__ . '/../assets/503.htm';
    }
}

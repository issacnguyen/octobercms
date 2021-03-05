<?php namespace Issac\Features\Controllers;

use Url;
use Lang;
use Flash;
use Event;
use Config;
use Request;
use Response;
use BackendMenu;
use Cms\Classes\Layout;
use Cms\Classes\Theme;
use Cms\Classes\CmsObject;
use Cms\Classes\CmsCompoundObject;
use Cms\Widgets\TemplateList;
use System\Helpers\DateTime;
use Backend\Classes\Controller;

/**
 * Index Back-end Controller
 */
class Index extends Controller
{
    protected $theme;

    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        // 'Backend.Behaviors.FormController',
        // 'Backend.Behaviors.ListController'
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    // public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    // public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        // try {
        //     if (!($this->theme = Theme::getEditTheme())) {
        //         throw new ApplicationException(Lang::get('cms::lang.theme.edit.not_found'));
        //     }
        //     $this->vars['activeWidgets'][] = 'postList';
        // }
        // catch (Exception $ex) {
        //     $this->handleError($ex);
        // }
        //
        // $context = [
        //     'postList' => 'posts',
        // ];

        // BackendMenu::setContext('Issac.Features', 'features', @$context[$this->vars['activeWidgets'][0]]);

        BackendMenu::setContext('Issac.Features', 'features', 'index');
    }
}

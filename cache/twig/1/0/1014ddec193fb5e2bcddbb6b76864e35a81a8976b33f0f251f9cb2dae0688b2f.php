<?php

/* @uloginteam_ulogin/ulogin_panel2.html */
class __TwigTemplate_1014ddec193fb5e2bcddbb6b76864e35a81a8976b33f0f251f9cb2dae0688b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $asset_file = "//ulogin.ru/js/ulogin.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('6');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 2
        $asset_file = "ulogin.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('6');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 3
        echo "
<div class=\"ulogin_form\">
    <div data-uloginid=\"";
        // line 5
        echo (isset($context["DATA_ULOGINID2"]) ? $context["DATA_ULOGINID2"] : null);
        echo "\" data-ulogin=\"";
        echo (isset($context["DATA_ULOGIN2"]) ? $context["DATA_ULOGIN2"] : null);
        echo "\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@uloginteam_ulogin/ulogin_panel2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 3,  34 => 2,  19 => 1,);
    }
}

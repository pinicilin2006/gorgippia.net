<?php

/* @uloginteam_ulogin/event/overall_header_navigation_prepend.html */
class __TwigTemplate_1414143ec91af0856c390e92ad0220f2984547f5933d0d903413711d27c6be8c extends Twig_Template
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
        if (((( !(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) &&  !(isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 2
            echo "<li style=\"margin-top: 3px;\" class=\"rightside small-icon\">
    ";
            // line 3
            $location = "ulogin_panel1.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ulogin_panel1.html", "@uloginteam_ulogin/event/overall_header_navigation_prepend.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@uloginteam_ulogin/event/overall_header_navigation_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}

<?php

/* @uloginteam_ulogin/event/ucp_register_credentials_before.html */
class __TwigTemplate_2ece1269fa494fdf8c765acfc82b00798facdc76f886844343024bef512eb5e2 extends Twig_Template
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
        if (( !(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 2
            echo "<dl>
    <dt><label for=\"ulogin\">Войти с помощью:</label><br/><span>Зарегистрируйтесь, используя существующий аккаунт соцсети</span></dt>
    <dd>
        ";
            // line 5
            $location = "ulogin_panel2.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ulogin_panel2.html", "@uloginteam_ulogin/event/ucp_register_credentials_before.html", 5)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 6
            echo "    </dd>
</dl>
<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "@uloginteam_ulogin/event/ucp_register_credentials_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}

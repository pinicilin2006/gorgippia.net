<?php

/* ucp_profile_signature.html */
class __TwigTemplate_1d0c7ab258763d0208182fe24ff99a5dbb7c23194d102c734e39d123165d0079 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_profile_signature.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

";
        // line 7
        if (((isset($context["SIGNATURE_PREVIEW"]) ? $context["SIGNATURE_PREVIEW"] : null) != "")) {
            // line 8
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<h3>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE_PREVIEW");
            echo "</h3>
\t\t<div class=\"postbody\">
\t\t\t<div class=\"signature standalone\">";
            // line 12
            echo (isset($context["SIGNATURE_PREVIEW"]) ? $context["SIGNATURE_PREVIEW"] : null);
            echo "</div>
\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 17
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SIGNATURE_EXPLAIN");
        echo "</p>

\t";
        // line 23
        $value = 1;
        $context['definition']->set('SIG_EDIT', $value);
        // line 24
        echo "\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "ucp_profile_signature.html", 24)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 25
        echo "
\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 30
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<input type=\"reset\" name=\"reset\" value=\"";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"preview\" value=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "\" class=\"button2 alternate-submit-action\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1 default-submit-action\" />
\t";
        // line 34
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 38
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_signature.html", 38)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_signature.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  92 => 25,  79 => 24,  76 => 23,  71 => 21,  65 => 17,  57 => 12,  52 => 10,  48 => 8,  46 => 7,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}

<?php

/* acp_update.html */
class __TwigTemplate_0c56e3b3fed1a2e2d8bbbc358772ba3a9141466f1cfcd859b5950cc1555d3257 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_update.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("VERSION_CHECK");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("VERSION_CHECK_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
            // line 10
            echo "\t<div class=\"successbox\">
\t\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("VERSION_UP_TO_DATE_ACP");
            echo "<br />[ <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a> ]</p>
\t</div>
";
        } else {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("VERSION_NOT_UP_TO_DATE_ACP");
            echo "<br />[ <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a> ]</p>
\t</div>
";
        }
        // line 18
        echo "
<fieldset>
\t<dl>
\t\t<dt><label>";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("CURRENT_VERSION");
        echo "</label></dt>
\t\t<dd><strong>";
        // line 22
        echo (isset($context["CURRENT_VERSION"]) ? $context["CURRENT_VERSION"] : null);
        echo "</strong> (phpBB ";
        echo (isset($context["CURRENT_PHPBB_VERSION"]) ? $context["CURRENT_PHPBB_VERSION"] : null);
        echo ")</dd>
\t</dl>
</fieldset>

";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
            // line 27
            echo "\t<fieldset>
\t\t<dl>
\t\t\t<dt><label>";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
            echo "</label></dt>
\t\t\t<dd><strong>";
            // line 30
            echo $this->getAttribute($context["updates_available"], "current", array());
            echo "</strong></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("RELEASE_ANNOUNCEMENT");
            echo "</label></dt>
\t\t\t<dd><strong><a href=\"";
            // line 34
            echo $this->getAttribute($context["updates_available"], "announcement", array());
            echo "\">";
            echo $this->getAttribute($context["updates_available"], "announcement", array());
            echo "</a></strong></dd>
\t\t</dl>
\t</fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
        // line 39
        if ( !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
            // line 40
            echo "\t";
            echo $this->env->getExtension('phpbb')->lang("UPDATE_INSTRUCTIONS");
            echo "
\t<br /><br />
";
        }
        // line 43
        echo "
";
        // line 44
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_update.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  138 => 43,  131 => 40,  129 => 39,  126 => 38,  114 => 34,  110 => 33,  104 => 30,  100 => 29,  96 => 27,  92 => 26,  83 => 22,  79 => 21,  74 => 18,  64 => 15,  61 => 14,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}

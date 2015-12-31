<?php

/* header_path.html */
class __TwigTemplate_709879b5d8b0d985e954ea0f392f49e119ced76831132c1f23916966f4788f54 extends Twig_Template
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
        echo "<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t";
        // line 2
        // line 3
        echo "\t<li class=\"breadcrumbs\">
\t\t";
        // line 4
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" itemprop=\"url\" data-navbar-reference=\"home\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 5
        echo "\t\t";
        // line 6
        echo "\t\t<span class=\"crumb\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\" itemprop=\"url\" data-navbar-reference=\"index\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 8
            echo "\t\t\t";
            // line 9
            echo "\t\t\t<span class=\"crumb\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t";
            // line 10
            // line 11
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t";
        // line 13
        echo "\t</li>
\t";
        // line 14
        // line 15
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "header_path.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  73 => 14,  70 => 13,  68 => 12,  62 => 11,  61 => 10,  49 => 9,  47 => 8,  43 => 7,  36 => 6,  34 => 5,  26 => 4,  23 => 3,  22 => 2,  19 => 1,);
    }
}

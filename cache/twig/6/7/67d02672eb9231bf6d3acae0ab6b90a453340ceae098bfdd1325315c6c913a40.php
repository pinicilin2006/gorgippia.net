<?php

/* profilefields/dropdown.html */
class __TwigTemplate_67d02672eb9231bf6d3acae0ab6b90a453340ceae098bfdd1325315c6c913a40 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "dropdown", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown"]) {
            // line 2
            echo "<select name=\"";
            echo $this->getAttribute($context["dropdown"], "FIELD_IDENT", array());
            echo "\" id=\"";
            echo $this->getAttribute($context["dropdown"], "FIELD_IDENT", array());
            echo "\">
\t";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dropdown"], "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                echo "<option value=\"";
                echo $this->getAttribute($context["options"], "OPTION_ID", array());
                echo "\"";
                echo $this->getAttribute($context["options"], "SELECTED", array());
                echo ">";
                echo $this->getAttribute($context["options"], "VALUE", array());
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4
            echo "</select>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  30 => 3,  23 => 2,  19 => 1,);
    }
}

<?php

/* profilefields/string.html */
class __TwigTemplate_2a9edd2470f6f3ce5219868bf7d5d09930b337f7a1c33a8200b4acecddeeb1bb extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "string", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["string"]) {
            // line 2
            echo "<input type=\"text\" class=\"inputbox autowidth\" name=\"";
            echo $this->getAttribute($context["string"], "FIELD_IDENT", array());
            echo "\" id=\"";
            echo $this->getAttribute($context["string"], "FIELD_IDENT", array());
            echo "\" size=\"";
            echo $this->getAttribute($context["string"], "FIELD_LENGTH", array());
            echo "\" maxlength=\"";
            echo $this->getAttribute($context["string"], "FIELD_MAXLEN", array());
            echo "\" value=\"";
            echo $this->getAttribute($context["string"], "FIELD_VALUE", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['string'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/string.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}

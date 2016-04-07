<?php

/* memberlist_search.html */
class __TwigTemplate_03b01176808ee95b775f3c1ded2d96e9ae3f81eb07d80b2a4e57d46c51505fb5 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
        echo "\" id=\"search_memberlist\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME_EXPLAIN");
        echo "</p>

\t";
        // line 7
        // line 8
        echo "\t<fieldset class=\"fields1 column1\">
\t<dl style=\"overflow: visible;\">
\t\t<dt><label for=\"username\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t";
        // line 12
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            echo "<div class=\"dropdown-container dropdown-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo "\">";
        }
        // line 13
        echo "\t\t\t<input type=\"text\" name=\"username\" id=\"username\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox\"";
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            echo " autocomplete=\"off\" data-filter=\"phpbb.search.filter\" data-ajax=\"member_search\" data-min-length=\"3\" data-url=\"";
            echo (isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null);
            echo "\" data-results=\"#user-search\" data-overlay=\"false\"";
        }
        echo " />
\t\t\t";
        // line 14
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            // line 15
            echo "\t\t\t\t<div class=\"dropdown live-search hidden\" id=\"user-search\">
\t\t\t\t\t<ul class=\"dropdown-contents search-results\">
\t\t\t\t\t\t<li class=\"search-result-tpl\"><span class=\"search-result\"></span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 22
        echo "\t\t</dd>
\t</dl>
";
        // line 24
        if ((isset($context["S_EMAIL_SEARCH_ALLOWED"]) ? $context["S_EMAIL_SEARCH_ALLOWED"] : null)) {
            // line 25
            echo "\t<dl>
\t\t<dt><label for=\"email\">";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("EMAIL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"email\" id=\"email\" value=\"";
            // line 27
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
        // line 30
        if ((isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null)) {
            // line 31
            echo "\t<dl>
\t\t<dt><label for=\"jabber\">";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"jabber\" id=\"jabber\" value=\"";
            // line 33
            echo (isset($context["JABBER"]) ? $context["JABBER"] : null);
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
        // line 36
        echo "\t<dl>
\t\t<dt><label for=\"search_group_id\">";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("GROUP");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"search_group_id\" id=\"search_group_id\">";
        // line 38
        echo (isset($context["S_GROUP_SELECT"]) ? $context["S_GROUP_SELECT"] : null);
        echo "</select></dd>
\t</dl>
\t";
        // line 40
        // line 41
        echo "\t<dl>
\t\t<dt><label for=\"sk\" class=\"label3\">";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"sk\" id=\"sk\">";
        // line 43
        echo (isset($context["S_SORT_OPTIONS"]) ? $context["S_SORT_OPTIONS"] : null);
        echo "</select> <select name=\"sd\">";
        echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
        echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset class=\"fields1 column2\">
\t<dl>
\t\t<dt><label for=\"joined\">";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"joined_select\">";
        // line 50
        echo (isset($context["S_JOINED_TIME_OPTIONS"]) ? $context["S_JOINED_TIME_OPTIONS"] : null);
        echo "</select> <input class=\"inputbox medium\" type=\"text\" name=\"joined\" id=\"joined\" value=\"";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("YEAR_MONTH_DAY");
        echo "\" /></dd>
\t</dl>
";
        // line 52
        if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
            // line 53
            echo "\t<dl>
\t\t<dt><label for=\"active\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"active_select\">";
            // line 55
            echo (isset($context["S_ACTIVE_TIME_OPTIONS"]) ? $context["S_ACTIVE_TIME_OPTIONS"] : null);
            echo "</select> <input class=\"inputbox medium\" type=\"text\" name=\"active\" id=\"active\" value=\"";
            echo (isset($context["ACTIVE"]) ? $context["ACTIVE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("YEAR_MONTH_DAY");
            echo "\" /></dd>
\t</dl>
";
        }
        // line 58
        echo "\t<dl>
\t\t<dt><label for=\"count\">";
        // line 59
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"count_select\">";
        // line 60
        echo (isset($context["S_COUNT_OPTIONS"]) ? $context["S_COUNT_OPTIONS"] : null);
        echo "</select> <input class=\"inputbox medium\" type=\"number\" min=\"0\" name=\"count\" id=\"count\" value=\"";
        echo (isset($context["COUNT"]) ? $context["COUNT"] : null);
        echo "\" /></dd>
\t</dl>
";
        // line 62
        if ((isset($context["S_IP_SEARCH_ALLOWED"]) ? $context["S_IP_SEARCH_ALLOWED"] : null)) {
            // line 63
            echo "\t<dl>
\t\t<dt><label for=\"ip\">";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("POST_IP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"inputbox medium\" type=\"text\" name=\"ip\" id=\"ip\" value=\"";
            // line 65
            echo (isset($context["IP"]) ? $context["IP"] : null);
            echo "\" /></dd>
\t</dl>
";
        }
        // line 68
        echo "\t";
        // line 69
        echo "\t</fieldset>

\t<div class=\"clear\"></div>

\t<hr />

";
        // line 75
        if ((isset($context["S_SEARCH_CUSTOM_FIELDS"]) ? $context["S_SEARCH_CUSTOM_FIELDS"] : null)) {
            // line 76
            echo "\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "search_custom_fields_1", array()))) {
                // line 77
                echo "\t\t<fieldset class=\"fields1 column1\">
\t\t";
                // line 78
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "search_custom_fields_1", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["search_custom_fields_1"]) {
                    // line 79
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
                    // line 80
                    echo $this->getAttribute($context["search_custom_fields_1"], "FIELD_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["search_custom_fields_1"], "LANG_NAME", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"";
                    // line 81
                    echo $this->getAttribute($context["search_custom_fields_1"], "FIELD_ID", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["search_custom_fields_1"], "FIELD_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["search_custom_fields_1"], "VALUE", array());
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_custom_fields_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "\t\t</fieldset>
\t";
            }
            // line 86
            echo "
\t";
            // line 87
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "search_custom_fields_2", array()))) {
                // line 88
                echo "\t\t<fieldset class=\"fields1 column2\">
\t\t";
                // line 89
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "search_custom_fields_2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["search_custom_fields_2"]) {
                    // line 90
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
                    // line 91
                    echo $this->getAttribute($context["search_custom_fields_2"], "FIELD_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["search_custom_fields_2"], "LANG_NAME", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"";
                    // line 92
                    echo $this->getAttribute($context["search_custom_fields_2"], "FIELD_ID", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["search_custom_fields_2"], "FIELD_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["search_custom_fields_2"], "VALUE", array());
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_custom_fields_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "\t\t</fieldset>
\t";
            }
            // line 97
            echo "\t<hr />
";
        }
        // line 99
        echo "
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"reset\" value=\"";
        // line 101
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" class=\"button1\" />
\t\t";
        // line 103
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>

\t</div>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "memberlist_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 103,  305 => 102,  301 => 101,  297 => 99,  293 => 97,  289 => 95,  276 => 92,  269 => 91,  266 => 90,  262 => 89,  259 => 88,  257 => 87,  254 => 86,  250 => 84,  237 => 81,  230 => 80,  227 => 79,  223 => 78,  220 => 77,  217 => 76,  215 => 75,  207 => 69,  205 => 68,  199 => 65,  194 => 64,  191 => 63,  189 => 62,  182 => 60,  177 => 59,  174 => 58,  164 => 55,  159 => 54,  156 => 53,  154 => 52,  145 => 50,  140 => 49,  129 => 43,  124 => 42,  121 => 41,  120 => 40,  115 => 38,  110 => 37,  107 => 36,  101 => 33,  96 => 32,  93 => 31,  91 => 30,  85 => 27,  80 => 26,  77 => 25,  75 => 24,  71 => 22,  62 => 15,  60 => 14,  49 => 13,  43 => 12,  37 => 10,  33 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}

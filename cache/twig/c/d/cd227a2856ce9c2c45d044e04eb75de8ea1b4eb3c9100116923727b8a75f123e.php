<?php

/* overall_header.html */
class __TwigTemplate_cd227a2856ce9c2c45d044e04eb75de8ea1b4eb3c9100116923727b8a75f123e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 6
        if ((isset($context["META"]) ? $context["META"] : null)) {
            echo (isset($context["META"]) ? $context["META"] : null);
        }
        // line 7
        echo "<title>";
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

<link href=\"style/admin.css?assets_version=";
        // line 9
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

<script>
var jump_page = '";
        // line 12
        echo addslashes($this->env->getExtension('phpbb')->lang("JUMP_PAGE"));
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "';
var on_page = '";
        // line 13
        echo (isset($context["CURRENT_PAGE"]) ? $context["CURRENT_PAGE"] : null);
        echo "';
var per_page = '";
        // line 14
        echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
        echo "';
var base_url = '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "js");
        echo "';

/**
* Jump to page
*/
function jumpto()
{
\tvar page = prompt(jump_page, on_page);

\tif (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
\t{
\t\tif (base_url.indexOf('?') == -1)
\t\t{
\t\t\tdocument.location.href = base_url + '?start=' + ((page - 1) * per_page);
\t\t}
\t\telse
\t\t{
\t\t\tdocument.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
\t\t}
\t}
}

/**
* Mark/unmark checkboxes
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
\tvar parent = document.getElementById(id) || document[id];

\tif (!parent)
\t{
\t\treturn;
\t}

\tvar rb = parent.getElementsByTagName('input');
\t
\tfor (var r = 0; r < rb.length; r++)
\t{
\t\tif (rb[r].name.substr(0, name.length) == name)
\t\t{
\t\t\trb[r].checked = state;
\t\t}
\t}
}

/**
* Find a member
*/
function find_username(url)
{
\tpopup(url, 760, 570, '_usersearch');
\treturn false;
}

/**
* Window popup
*/
function popup(url, width, height, name)
{
\tif (!name)
\t{
\t\tname = '_popup';
\t}

\twindow.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
\treturn false;
}
</script>

";
        // line 85
        // line 86
        echo "
";
        // line 87
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

";
        // line 89
        // line 90
        echo "
</head>

<body class=\"";
        // line 93
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo " nojs\">

";
        // line 95
        // line 96
        echo "
<div id=\"wrap\">
\t<div id=\"page-header\">
\t\t<h1>";
        // line 99
        echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL");
        echo "</h1>
\t\t<p><a href=\"";
        // line 100
        echo (isset($context["U_ADM_INDEX"]) ? $context["U_ADM_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADMIN_INDEX");
        echo "</a> &bull; <a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM_INDEX");
        echo "</a></p>
\t\t<p id=\"skip\"><a href=\"#acp\">";
        // line 101
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t</div>
\t
\t<div id=\"page-body\">
\t\t<div id=\"tabs\">
\t\t\t<ul>
\t\t\t";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 108
            echo "\t\t\t\t<li class=\"tab";
            if ($this->getAttribute($context["t_block1"], "S_SELECTED", array())) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["t_block1"], "U_TITLE", array());
            echo "\">";
            echo $this->getAttribute($context["t_block1"], "L_TITLE", array());
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t</ul>
\t\t</div>

\t\t<div id=\"acp\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t<div id=\"menu\">
\t\t\t\t\t\t<p>";
        // line 116
        echo $this->env->getExtension('phpbb')->lang("LOGGED_IN_AS");
        echo "<br /><strong>";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</strong> [&nbsp;<a href=\"";
        echo (isset($context["U_LOGOUT"]) ? $context["U_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("LOGOUT");
        echo "</a>&nbsp;][&nbsp;<a href=\"";
        echo (isset($context["U_ADM_LOGOUT"]) ? $context["U_ADM_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADM_LOGOUT");
        echo "</a>&nbsp;]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t\t\t\t\t\t";
        // line 117
        $value = 0;
        $context['definition']->set('LI_USED', $value);
        // line 118
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 119
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", array())) {
                // line 120
                echo "\t
\t\t\t\t\t\t";
                // line 121
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l_block1"], "l_block2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 122
                    echo "\t\t\t\t\t\t\t";
                    if (twig_length_filter($this->env, $this->getAttribute($context["l_block2"], "l_block3", array()))) {
                        // line 123
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LI_USED", array())) {
                            echo "</ul></div>";
                        }
                        // line 124
                        echo "\t\t\t\t\t\t\t<div class=\"menu-block\">
\t\t\t\t\t\t\t\t<a class=\"header\" href=\"javascript:void(0);\">";
                        // line 125
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                        // line 127
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 128
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 129
                    echo "\t
\t\t\t\t\t\t\t";
                    // line 130
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l_block2"], "l_block3", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["l_block3"]) {
                        // line 131
                        echo "\t\t\t\t\t\t\t\t<li";
                        if ($this->getAttribute($context["l_block3"], "S_SELECTED", array())) {
                            echo " id=\"activemenu\"";
                        }
                        echo "><a href=\"";
                        echo $this->getAttribute($context["l_block3"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["l_block3"], "L_TITLE", array());
                        echo "</span></a></li>
\t\t\t\t\t\t\t\t";
                        // line 132
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 133
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LI_USED", array())) {
            // line 139
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t</div>
\t
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t<div class=\"main\">
";
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 142,  311 => 139,  308 => 138,  302 => 137,  298 => 135,  292 => 134,  286 => 133,  283 => 132,  272 => 131,  268 => 130,  265 => 129,  262 => 128,  259 => 127,  254 => 125,  251 => 124,  246 => 123,  243 => 122,  239 => 121,  236 => 120,  233 => 119,  228 => 118,  225 => 117,  211 => 116,  203 => 110,  188 => 108,  184 => 107,  175 => 101,  165 => 100,  161 => 99,  156 => 96,  155 => 95,  148 => 93,  143 => 90,  142 => 89,  137 => 87,  134 => 86,  133 => 85,  60 => 15,  56 => 14,  52 => 13,  47 => 12,  41 => 9,  35 => 7,  31 => 6,  22 => 2,  19 => 1,);
    }
}

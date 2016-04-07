<?php

/* ucp_header.html */
class __TwigTemplate_6cff06ffe6729aef90edf2be51620d0b63f49ccda475eaef459d62ba2b5313ad extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null)) {
            // line 4
            echo "<ul class=\"header-icons\">
\t<li><a href=\"";
            // line 5
            echo (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
            echo "\" class=\"icon-header-print\">";
            echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
            echo "</a></li>
</ul>
";
        }
        // line 8
        echo "<h2 class=\"ucp-title\">";
        echo $this->env->getExtension('phpbb')->lang("UCP");
        echo "</h2>

<div id=\"tabs\">
\t<ul>
\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 13
            echo "\t\t<li class=\"tab";
            if ($this->getAttribute($context["t_block1"], "S_SELECTED", array())) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["t_block1"], "U_TITLE", array());
            echo "\">";
            echo $this->getAttribute($context["t_block1"], "L_TITLE", array());
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</ul>
</div>

";
        // line 18
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 19
            echo "<form id=\"postform\" method=\"post\" action=\"";
            echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
            echo "\"";
            echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
            echo ">
";
        }
        // line 21
        echo "
<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\">
\t\t<div id=\"navigation\" role=\"navigation\">

\t\t";
        // line 30
        if ((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
            // line 31
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 32
                echo "\t\t\t\t";
                if (((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) &&  !$this->getAttribute($context["t_block2"], "S_LAST_ROW", array()))) {
                    // line 33
                    echo "\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 34
                    if ($this->getAttribute($context["t_block2"], "S_SELECTED", array())) {
                        // line 35
                        echo "\t\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 37
                        echo "\t\t\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                        echo "</span></a></li>
\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                // line 41
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
\t\t\t<hr />
\t\t\t";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "folder", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 45
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_FIRST_ROW", array())) {
                    echo "<ul>";
                }
                // line 46
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_CUR_FOLDER", array())) {
                    // line 47
                    echo "\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", array());
                    echo "\">";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", array()) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", array());
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                    }
                    echo "</a></li>
\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", array());
                    echo "\"><span>";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", array()) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", array());
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                    }
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_LAST_ROW", array())) {
                    echo "</ul>";
                }
                // line 52
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t<hr />
\t\t";
        }
        // line 55
        echo "
\t\t\t<ul>
\t\t";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 58
            echo "\t\t\t";
            if ((((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && $this->getAttribute($context["t_block2"], "S_LAST_ROW", array())) ||  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null))) {
                // line 59
                echo "\t\t\t\t";
                if ($this->getAttribute($context["t_block2"], "S_SELECTED", array())) {
                    // line 60
                    echo "\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                    echo "\"><span>";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                    echo "</span></a></li>
\t\t\t\t";
                } else {
                    // line 62
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                    echo "\"><span>";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 64
                echo "\t\t\t";
            }
            // line 65
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t</ul>
\t\t</div>

\t\t";
        // line 69
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array())))) {
            // line 70
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("FRIENDS");
            echo "</dt>

\t\t\t\t";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 77
                echo "\t\t\t\t\t<dd class=\"friend-online\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_ONLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_online"], "USERNAME_FULL", array());
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo " <input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_online"], "USER_ID", array());
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                if (($this->getAttribute($context["friends_online"], "S_LAST_ROW", array()) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array())))) {
                    echo "<hr />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "
\t\t\t\t";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 81
                echo "\t\t\t\t\t<dd class=\"friend-offline\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_OFFLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_offline"], "USERNAME_FULL", array());
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo "<input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_offline"], "USER_ID", array());
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 88
        echo "
\t\t";
        // line 89
        if ((isset($context["S_SHOW_COLOUR_LEGEND"]) ? $context["S_SHOW_COLOUR_LEGEND"] : null)) {
            // line 90
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("MESSAGE_COLOURS");
            echo "</dt>
\t\t\t\t";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_colour_info", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                // line 96
                echo "\t\t\t\t\t<dd class=\"pm-legend";
                if ($this->getAttribute($context["pm_colour_info"], "CLASS", array())) {
                    echo " ";
                    echo $this->getAttribute($context["pm_colour_info"], "CLASS", array());
                }
                echo "\">";
                if ($this->getAttribute($context["pm_colour_info"], "IMG", array())) {
                    echo $this->getAttribute($context["pm_colour_info"], "IMG", array());
                    echo " ";
                }
                echo $this->getAttribute($context["pm_colour_info"], "LANG", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 103
        echo "
\t</div>

\t<div id=\"cp-main\" class=\"ucp-main panel-container\">
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 103,  359 => 98,  341 => 96,  337 => 95,  333 => 94,  327 => 90,  325 => 89,  322 => 88,  315 => 83,  296 => 81,  292 => 80,  289 => 79,  267 => 77,  263 => 76,  258 => 74,  252 => 70,  250 => 69,  245 => 66,  239 => 65,  236 => 64,  228 => 62,  220 => 60,  217 => 59,  214 => 58,  210 => 57,  206 => 55,  202 => 53,  196 => 52,  191 => 51,  175 => 49,  159 => 47,  156 => 46,  151 => 45,  147 => 44,  143 => 42,  137 => 41,  133 => 39,  125 => 37,  117 => 35,  115 => 34,  112 => 33,  109 => 32,  104 => 31,  102 => 30,  91 => 21,  83 => 19,  81 => 18,  76 => 15,  61 => 13,  57 => 12,  49 => 8,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}

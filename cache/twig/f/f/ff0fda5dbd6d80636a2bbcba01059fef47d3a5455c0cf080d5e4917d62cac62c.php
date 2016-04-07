<?php

/* posting_layout.html */
class __TwigTemplate_ff0fda5dbd6d80636a2bbcba01059fef47d3a5455c0cf080d5e4917d62cac62c extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "posting_layout.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null)) {
            // line 4
            echo "\t<h2 class=\"posting-title\">";
            echo "<a href=\"";
            echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
            echo "\">";
            echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
            echo "</a></h2>
";
        } else {
            // line 6
            echo "\t<h2 class=\"posting-title\"><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\">";
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo "</a></h2>
";
        }
        // line 8
        $location = "header_path.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("header_path.html", "posting_layout.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "
";
        // line 10
        if ((((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null) || (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) || (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null))) {
            // line 11
            echo "\t<div class=\"rules";
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">
\t\t";
            // line 13
            if ((isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_NAME");
                echo ":</strong> ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "<br />";
            }
            // line 14
            echo "\t\t";
            if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_DESC");
                echo ":</strong> ";
                echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
                echo "<br />";
            }
            // line 15
            echo "\t\t";
            if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo ":</strong> ";
                if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                    echo "\">";
                    echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                    echo "</a>";
                } else {
                    echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                }
                echo "<br />";
            }
            // line 16
            echo "\t\t</div>
\t</div>
";
        }
        // line 19
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 20
        echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

";
        // line 22
        if ((isset($context["S_DRAFT_LOADED"]) ? $context["S_DRAFT_LOADED"] : null)) {
            // line 23
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t
\t\t<h3>";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo "</h3>
\t\t<p>";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("DRAFT_LOADED");
            echo "</p>
\t\t
\t\t</div>
\t</div>
";
        }
        // line 32
        echo "
";
        // line 33
        if ((isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
            $location = "drafts.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("drafts.html", "posting_layout.html", 33)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 34
        echo "
";
        // line 35
        if ((isset($context["S_POST_REVIEW"]) ? $context["S_POST_REVIEW"] : null)) {
            $location = "posting_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_review.html", "posting_layout.html", 35)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 36
        echo "
";
        // line 37
        if ((isset($context["S_UNGLOBALISE"]) ? $context["S_UNGLOBALISE"] : null)) {
            // line 38
            echo "\t<div class=\"panel bg3\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"fields1\">
\t\t\t<h2>";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("SELECT_DESTINATION_FORUM");
            echo "</h2>
\t\t\t<p>";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("UNGLOBALISE_EXPLAIN");
            echo "</p>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"to_forum_id\">";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("MOVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><select id=\"to_forum_id\" name=\"to_forum_id\">";
            // line 45
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select></dd>
\t\t\t</dl>
\t\t\t
\t\t\t<dl>
\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t<dd><input class=\"button1\" type=\"submit\" name=\"post\" value=\"";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("CONFIRM");
            echo "\" /> <input class=\"button2\" type=\"submit\" name=\"cancel_unglobalise\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("CANCEL");
            echo "\" /></dd>
\t\t\t</dl>
\t\t</fieldset>

\t\t</div>
\t</div>
";
        }
        // line 57
        echo "
";
        // line 58
        if ((isset($context["S_DISPLAY_PREVIEW"]) ? $context["S_DISPLAY_PREVIEW"] : null)) {
            $location = "posting_preview.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_preview.html", "posting_layout.html", 58)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 59
        echo "
<div class=\"panel\" id=\"postingbox\">
\t<div class=\"inner\">
\t
\t<h3>";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("POST_A");
        echo "</h3>

\t";
        // line 65
        $value = 1;
        $context['definition']->set('EXTRA_POSTING_OPTIONS', $value);
        // line 66
        echo "\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "posting_layout.html", 66)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 67
        echo "\t<input type=\"hidden\" name=\"show_panel\" value=\"options-panel\" />
\t";
        // line 68
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 69
            echo "\t\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t";
        } else {
            // line 71
            echo "\t\t<input type=\"hidden\" name=\"creation_time\" value=\"0\" />
\t\t<input type=\"hidden\" name=\"form_token\" value=\"0\" />
\t\t<script>
\t\tfunction addListener(obj, type, listener) {
\t\t\tif (obj.addEventListener) {
\t\t\t\tobj.addEventListener(type, listener, false);
\t\t\t\treturn true;
\t\t\t} else if(obj.attachEvent) {
\t\t\t\tobj.attachEvent('on' + type, listener);
\t\t\t\treturn true;
\t\t\t}
\t\t\treturn false;
\t\t}

\t\taddListener(document.getElementById(\"postform\"), 'submit', function() {
\t\t\t\$('i'+'nput[nam'+'e=cre'+'ation_ti'+'me]').val('";
            // line 86
            echo (isset($context["RAW_CREATION_TIME"]) ? $context["RAW_CREATION_TIME"] : null);
            echo "');
\t\t\t\$('in'+'pu'+'t[nam'+'e=form'+'_to'+'ken]').val('";
            // line 87
            echo (isset($context["RAW_FORM_TOKEN"]) ? $context["RAW_FORM_TOKEN"] : null);
            echo "');
\t\t});

\t\t";
            // line 90
            if ((isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null)) {
                // line 91
                echo "\t\taddListener(window, 'load', function() {
\t\t\tif (!('localStorage' in window && window['localStorage'] !== null) || \$('#username').val()) return;
\t\t\t\$('#username').val(localStorage.getItem('anonymous_username')).on('change', function()
\t\t\t{
\t\t\t\tlocalStorage.setItem('anonymous_username', \$(this).val());
\t\t\t});
\t\t});
\t\t";
            }
            // line 99
            echo "\t\t</script>
\t";
        }
        // line 101
        echo "\t</div>
</div>

";
        // line 104
        // line 105
        echo "
";
        // line 106
        if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "posting_layout.html", 106)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 107
        echo "
</form>

";
        // line 110
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "posting_layout.html", 110)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "posting_layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 110,  345 => 107,  331 => 106,  328 => 105,  327 => 104,  322 => 101,  318 => 99,  308 => 91,  306 => 90,  300 => 87,  296 => 86,  279 => 71,  273 => 69,  271 => 68,  268 => 67,  255 => 66,  252 => 65,  247 => 63,  241 => 59,  227 => 58,  224 => 57,  212 => 50,  204 => 45,  199 => 44,  194 => 42,  190 => 41,  185 => 38,  183 => 37,  180 => 36,  166 => 35,  163 => 34,  149 => 33,  146 => 32,  138 => 27,  134 => 26,  129 => 23,  127 => 22,  120 => 20,  117 => 19,  112 => 16,  95 => 15,  86 => 14,  78 => 13,  70 => 11,  68 => 10,  65 => 9,  53 => 8,  45 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}

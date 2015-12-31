<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_7da843a2bda1c234e94d23407b7cfafbbe7ef94e489c8c90cc4662f380eba3e5 extends Twig_Template
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
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)) || (isset($context["U_SWITCH_MP"]) ? $context["U_SWITCH_MP"] : null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\"></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 6
            // line 7
            echo "\t\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 8
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 9
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ( !(isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 13
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_BOOKMARKED_TOPIC"]) ? $context["S_BOOKMARKED_TOPIC"] : null)) {
                    echo "unbookmark";
                } else {
                    echo "bookmark";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 14
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ( !(isset($context["S_BOOKMARKED_TOPIC"]) ? $context["S_BOOKMARKED_TOPIC"] : null)) {
                    echo "unbookmark";
                } else {
                    echo "bookmark";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\">";
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" class=\"bump-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"hidden\" data-update-all=\".bump-link\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 18
            echo "\t\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 21
                echo "\t\t\t\t\t<li class=\"small-icon icon-switch-mp-on-";
                if ((isset($context["STYLE_MP_ON_LEFT"]) ? $context["STYLE_MP_ON_LEFT"] : null)) {
                    echo "right";
                } else {
                    echo "left";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 22
                echo (isset($context["U_SWITCH_MP"]) ? $context["U_SWITCH_MP"] : null);
                echo "\" class=\"switch-mp-link\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-switch-mp-on-";
                if ((isset($context["STYLE_MP_ON_LEFT"]) ? $context["STYLE_MP_ON_LEFT"] : null)) {
                    echo "left";
                } else {
                    echo "right";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_SWITCH_MP_TOGGLE"]) ? $context["S_SWITCH_MP_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_SWITCH_MP_TOGGLE"]) ? $context["U_SWITCH_MP_TOGGLE"] : null);
                echo "\" data-update-all=\".switch-mp-link\" data-runs-func=\"switchMP\">";
                echo (isset($context["S_SWITCH_MP"]) ? $context["S_SWITCH_MP"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 26,  156 => 25,  138 => 22,  129 => 21,  126 => 20,  115 => 19,  104 => 18,  93 => 17,  75 => 14,  66 => 13,  63 => 12,  43 => 9,  34 => 8,  31 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}

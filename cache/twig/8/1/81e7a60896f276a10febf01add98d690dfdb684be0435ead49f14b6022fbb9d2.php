<?php

/* overall_header.html */
class __TwigTemplate_81e7a60896f276a10febf01add98d690dfdb684be0435ead49f14b6022fbb9d2 extends Twig_Template
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
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 6
        if ((isset($context["SITE_KEYWORDS"]) ? $context["SITE_KEYWORDS"] : null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["SITE_KEYWORDS"]) ? $context["SITE_KEYWORDS"] : null);
            echo "\" />";
        }
        // line 7
        if ((isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null)) {
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
            echo "\" />";
        }
        // line 8
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 9
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        if (((isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null) &&  !(isset($context["S_ON_INDEX"]) ? $context["S_ON_INDEX"] : null))) {
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            echo " - ";
        }
        if (((isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null) && ((isset($context["ON_PAGE"]) ? $context["ON_PAGE"] : null) > 1))) {
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo " - ";
        }
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        if (((isset($context["S_ON_INDEX"]) ? $context["S_ON_INDEX"] : null) && (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null))) {
            echo " - ";
            echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        }
        echo "</title>

";
        // line 11
        if ((isset($context["SOCIAL_MEDIA_COVER_URL"]) ? $context["SOCIAL_MEDIA_COVER_URL"] : null)) {
            echo "<link rel=\"image_src\" href=\"";
            echo (isset($context["SOCIAL_MEDIA_COVER_URL"]) ? $context["SOCIAL_MEDIA_COVER_URL"] : null);
            echo "\" />";
        }
        // line 12
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 13
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED_OVERALL");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\">";
            }
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\">";
            }
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\">";
            }
            // line 16
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\">";
            }
            // line 17
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\">";
            }
            // line 18
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\">";
            }
            // line 19
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\">";
            }
            // line 20
            echo "\t";
        }
        // line 22
        echo "
";
        // line 23
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 24
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\">
";
        }
        // line 26
        echo "
";
        // line 27
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 28
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 43
        echo "<link href=\"";
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 44
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/responsive.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px), all and (max-device-width: 700px)\">

";
        // line 46
        if ((isset($context["STYLE_MAX_WIDTH"]) ? $context["STYLE_MAX_WIDTH"] : null)) {
            // line 47
            echo "\t<style>#wrap{max-width: ";
            echo (isset($context["STYLE_MAX_WIDTH"]) ? $context["STYLE_MAX_WIDTH"] : null);
            echo "px;}</style>
";
        }
        // line 49
        echo "
";
        // line 50
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 51
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 53
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 55
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 58
        // line 59
        echo "
";
        // line 60
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

";
        // line 62
        // line 63
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 65
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        if ((((isset($context["STYLE_NEW_YEAR"]) ? $context["STYLE_NEW_YEAR"] : null) == 1) || (((isset($context["STYLE_NEW_YEAR"]) ? $context["STYLE_NEW_YEAR"] : null) ==  -1) && ((((isset($context["CURRENT_MONTH"]) ? $context["CURRENT_MONTH"] : null) == 12) || ((isset($context["CURRENT_MONTH"]) ? $context["CURRENT_MONTH"] : null) == 1)) || ((isset($context["CURRENT_MONTH"]) ? $context["CURRENT_MONTH"] : null) == 2))))) {
            echo " new-year";
        }
        if ( !(isset($context["STYLE_ROUNDED_CORNERS"]) ? $context["STYLE_ROUNDED_CORNERS"] : null)) {
            echo " no-rounded-corners";
        }
        echo "\">

";
        // line 67
        // line 68
        echo "
<div id=\"wrap\">
\t";
        // line 70
        if ((isset($context["STYLE_BACK_TO_TOP"]) ? $context["STYLE_BACK_TO_TOP"] : null)) {
            echo "<div id=\"back-to-top\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "\"";
            if (((isset($context["STYLE_BACK_TO_TOP"]) ? $context["STYLE_BACK_TO_TOP"] : null) == 2)) {
                echo " class=\"on-right\"";
            }
            echo "></div>";
        }
        // line 71
        echo "\t";
        if ((isset($context["S_TOP_LINKS"]) ? $context["S_TOP_LINKS"] : null)) {
            // line 72
            echo "\t<div id=\"top-menu\">
\t\t<ul id=\"top-links\">
\t\t";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "toplinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["toplinks"]) {
                // line 75
                echo "\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["toplinks"], "URL", array());
                echo "\"";
                if ($this->getAttribute($context["toplinks"], "NEWWINDOW", array())) {
                    echo " target=\"_blank\"";
                }
                if ($this->getAttribute($context["toplinks"], "NOFOLLOW", array())) {
                    echo " rel=\"nofollow\"";
                }
                echo ">";
                echo $this->getAttribute($context["toplinks"], "TITLE", array());
                echo "</a></li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toplinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t</ul>
\t\t";
            // line 78
            if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
                // line 79
                echo "\t\t<div id=\"search-box\" class=\"search-box search-top responsive-hide\">
\t\t\t<form action=\"";
                // line 80
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\" method=\"get\" id=\"search\">
\t\t\t<fieldset>
\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
                // line 82
                echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
                echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
                echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                echo "\" placeholder=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 83
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 84
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t\t";
                // line 85
                echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t\t";
            }
            // line 90
            echo "\t</div>
\t";
        }
        // line 92
        echo "\t<div id=\"page-header\" ";
        if ( !(isset($context["S_TOP_LINKS"]) ? $context["S_TOP_LINKS"] : null)) {
            echo " style=\"padding-top:10px;\"";
        }
        echo ">
\t\t<div class=\"headerbar\" role=\"banner\">
\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 97
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\">";
        echo (isset($context["SITE_LOGO_IMG"]) ? $context["SITE_LOGO_IMG"] : null);
        echo "</a>
\t\t\t\t<h1";
        // line 98
        if ( !(isset($context["STYLE_SHOW_SITENAME_IN_HEADERBAR"]) ? $context["STYLE_SHOW_SITENAME_IN_HEADERBAR"] : null)) {
            echo " class=\"hidden\"";
        }
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</a></h1>
\t\t\t\t";
        // line 99
        if (((isset($context["STYLE_SHOW_SITENAME_IN_HEADERBAR"]) ? $context["STYLE_SHOW_SITENAME_IN_HEADERBAR"] : null) && (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null))) {
            echo "<p>";
            echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
            echo "</p>";
        }
        // line 100
        echo "\t\t\t</div>

\t\t\t";
        // line 102
        // line 103
        echo "\t\t\t";
        if ((( !(isset($context["S_TOP_LINKS"]) ? $context["S_TOP_LINKS"] : null) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 104
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 105
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 108
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t<a href=\"";
            // line 109
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t\t";
            // line 110
            echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        }
        // line 115
        echo "
\t\t\t</div>
\t\t</div>
\t\t";
        // line 118
        // line 119
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 119)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 120
        echo "\t</div>

\t";
        // line 122
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
        $this->env->loadTemplate('@uloginteam_ulogin/event/overall_header_page_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 123
        echo "
\t<div id=\"page-body\" role=\"main\"";
        // line 124
        if ((isset($context["STYLE_MP_ON_LEFT"]) ? $context["STYLE_MP_ON_LEFT"] : null)) {
            echo " class=\"mp-on-left\"";
        }
        echo ">
\t\t";
        // line 125
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 126
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 132
        echo "
\t\t";
        // line 133
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
        return array (  503 => 133,  500 => 132,  490 => 128,  486 => 126,  484 => 125,  478 => 124,  475 => 123,  470 => 122,  466 => 120,  453 => 119,  452 => 118,  447 => 115,  439 => 110,  431 => 109,  425 => 108,  417 => 107,  412 => 105,  409 => 104,  406 => 103,  405 => 102,  401 => 100,  395 => 99,  385 => 98,  369 => 97,  358 => 92,  354 => 90,  346 => 85,  338 => 84,  332 => 83,  324 => 82,  319 => 80,  316 => 79,  314 => 78,  311 => 77,  293 => 75,  289 => 74,  285 => 72,  282 => 71,  272 => 70,  268 => 68,  267 => 67,  252 => 65,  248 => 63,  247 => 62,  242 => 60,  239 => 59,  238 => 58,  230 => 55,  226 => 53,  218 => 51,  216 => 50,  213 => 49,  207 => 47,  205 => 46,  198 => 44,  193 => 43,  176 => 28,  174 => 27,  171 => 26,  165 => 24,  163 => 23,  160 => 22,  157 => 20,  142 => 19,  129 => 18,  120 => 17,  111 => 16,  102 => 15,  93 => 14,  84 => 13,  82 => 12,  76 => 11,  47 => 9,  43 => 8,  37 => 7,  31 => 6,  22 => 2,  19 => 1,);
    }
}

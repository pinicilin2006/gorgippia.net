<?php

/* header_icons.html */
class __TwigTemplate_8a5c725475a55b573b19ffc6728871c11d190781e778940fd16274a9e120e623 extends Twig_Template
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
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 2
            echo "<ul class=\"header-icons\">
\t";
            // line 3
            if ((isset($context["STYLE_SHOW_SOCIAL_BUTTONS"]) ? $context["STYLE_SHOW_SOCIAL_BUTTONS"] : null)) {
                // line 4
                echo "\t<script>
\t(function(){
\t\tvar url = encodeURIComponent(document.location.href);
\t\tvar title = encodeURIComponent(document.title);
\t\tdocument.write('<li><a rel=\"nofollow\" target=\"_blank\" href=\"https://vk.com/share.php?url='+url+'&amp;title='+title+'\" title=\"";
                // line 8
                echo $this->env->getExtension('phpbb')->lang("SOCIAL_SHARE_IN");
                echo " vk.com\" class=\"icon-vkontakte\">";
                echo $this->env->getExtension('phpbb')->lang("SOCIAL_SHARE_IN");
                echo " vk.com</a></li>');
\t\tdocument.write('<li><a rel=\"nofollow\" target=\"_blank\" href=\"https://plus.google.com/share?url='+url+'\" title=\"";
                // line 9
                echo $this->env->getExtension('phpbb')->lang("SOCIAL_SHARE_IN");
                echo " Google Plus\" class=\"icon-google-plus\">";
                echo $this->env->getExtension('phpbb')->lang("SOCIAL_SHARE_IN");
                echo " Google Plus</a></li>');
\t\tdocument.write('<li><a rel=\"nofollow\" target=\"_blank\" href=\"https://facebook.com/sharer.php?u='+url+'\" title=\"";
                // line 10
                echo $this->env->getExtension('phpbb')->lang("SOCIAL_SHARE_IN");
                echo " facebook.com\" class=\"icon-facebook\">";
                echo $this->env->getExtension('phpbb')->lang("SOCIAL_SHARE_IN");
                echo " facebook.com</a></li>');
\t\tdocument.write('<li";
                // line 11
                if (((isset($context["STYLE_SHOW_SOCIAL_BUTTONS"]) ? $context["STYLE_SHOW_SOCIAL_BUTTONS"] : null) && ((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) || (((((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null))))) {
                    echo " class=\"divider\"";
                }
                echo "><a rel=\"nofollow\" target=\"_blank\" href=\"https://twitter.com/intent/tweet?text='+title+'&amp;url='+url+'\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SOCIAL_SHARE_IN");
                echo " twitter.com\" class=\"icon-twitter\">";
                echo $this->env->getExtension('phpbb')->lang("SOCIAL_SHARE_IN");
                echo " twitter.com</a></li>');
\t})();
\t</script>
\t";
            }
            // line 15
            echo "
\t";
            // line 16
            if ((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null)) {
                // line 17
                echo "\t\t<li class=\"icon-";
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t<a href=\"";
                // line 18
                echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
                echo "\" data-ajax=\"toggle_link\" title=\"";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "\" data-toggle-class=\"icon-";
                if ( !(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
                echo "\">";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "</a>
\t\t</li>
\t";
            }
            // line 21
            echo "
\t";
            // line 22
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li><a rel=\"nofollow\" href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" class=\"icon-header-print\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 23
            echo "
\t";
            // line 24
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li><a rel=\"nofollow\" href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\" class=\"icon-header-sendemail\">";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 25
            echo "
\t";
            // line 26
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 27
                echo "\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t<a href=\"";
                // line 28
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
\t\t</li>
\t";
            }
            // line 31
            echo "
\t";
            // line 32
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 33
                echo "\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_BOOKMARKED_TOPIC"]) ? $context["S_BOOKMARKED_TOPIC"] : null)) {
                    echo "unbookmark";
                } else {
                    echo "bookmark";
                }
                echo "\">
\t\t\t<a href=\"";
                // line 34
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
\t\t</li>
\t";
            }
            // line 37
            echo "
\t";
            // line 38
            if ((isset($context["U_LOCK_TOPIC"]) ? $context["U_LOCK_TOPIC"] : null)) {
                // line 39
                echo "\t\t<li>";
                if ( !(isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo "<a data-refresh=\"true\" data-ajax=\"true\" href=\"";
                    echo (isset($context["U_LOCK_TOPIC"]) ? $context["U_LOCK_TOPIC"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "\" class=\"icon-header-lock\">";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "</a>";
                } else {
                    echo "<a data-refresh=\"true\" data-ajax=\"true\" href=\"";
                    echo (isset($context["U_LOCK_TOPIC"]) ? $context["U_LOCK_TOPIC"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("UNLOCK_TOPIC");
                    echo "\" class=\"icon-header-unlock\">";
                    echo $this->env->getExtension('phpbb')->lang("UNLOCK_TOPIC");
                    echo "</a>";
                }
                echo "</li>
\t";
            }
            // line 41
            echo "
\t";
            // line 42
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                // line 43
                echo "\t\t<li class=\"small-icon icon-bump responsive-hide\">
\t\t\t<a href=\"";
                // line 44
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" class=\"bump-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"hidden\" data-update-all=\".bump-link\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a>
\t\t</li>
\t";
            }
            // line 47
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "header_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 47,  224 => 44,  221 => 43,  219 => 42,  216 => 41,  194 => 39,  192 => 38,  189 => 37,  171 => 34,  162 => 33,  160 => 32,  157 => 31,  137 => 28,  128 => 27,  126 => 26,  123 => 25,  113 => 24,  110 => 23,  100 => 22,  97 => 21,  77 => 18,  68 => 17,  66 => 16,  63 => 15,  50 => 11,  44 => 10,  38 => 9,  32 => 8,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}

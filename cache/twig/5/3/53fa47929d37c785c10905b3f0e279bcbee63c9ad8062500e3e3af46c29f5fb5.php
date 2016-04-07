<?php

/* ucp_pm_viewmessage.html */
class __TwigTemplate_53fa47929d37c785c10905b3f0e279bcbee63c9ad8062500e3e3af46c29f5fb5 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewmessage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewmessage.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
\t</div>
</div>


";
        // line 9
        if (((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null) && ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null) || (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)))) {
            // line 10
            echo "\t<fieldset class=\"display-options clearfix\">
\t\t";
            // line 11
            if ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null);
                echo "\" class=\"left-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_HISTORY");
                echo "</a>";
            }
            // line 12
            echo "\t\t";
            if ((isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null);
                echo "\" class=\"right-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_HISTORY");
                echo "</a>";
            }
            // line 13
            echo "\t</fieldset>
";
        }
        // line 15
        echo "

<div id=\"post-";
        // line 17
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\" class=\"post pm has-profile";
        if (((isset($context["S_POST_UNAPPROVED"]) ? $context["S_POST_UNAPPROVED"] : null) || (isset($context["S_POST_REPORTED"]) ? $context["S_POST_REPORTED"] : null))) {
            echo " reported";
        }
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
<div class=\"inner\">

\t<dl class=\"postprofile\" id=\"profile";
        // line 20
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\">
\t\t<dt class=\"";
        // line 21
        if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG", array()))) {
            echo "has-profile-rank";
        } else {
            echo "no-profile-rank";
        }
        echo " responsive-hide\">
\t\t\t";
        // line 22
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        if ((isset($context["STYLE_MP_SHOW_GENDER"]) ? $context["STYLE_MP_SHOW_GENDER"] : null)) {
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POSTER_GENDER_M", array())) {
                echo " <img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/icon_gender_m.gif\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GENDER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("GENDER_M");
                echo "\" alt=\"M\" />";
            } elseif ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POSTER_GENDER_F", array())) {
                echo " <img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/icon_gender_f.gif\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GENDER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("GENDER_F");
                echo "\" alt=\"F\" />";
            }
        }
        // line 23
        echo "\t\t</dt>
\t\t";
        // line 24
        // line 25
        echo "\t\t";
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<dd class=\"profile-rank responsive-hide\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</dd>";
        }
        // line 26
        echo "\t\t";
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<dd class=\"profile-rank responsive-hide\">";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 27
        echo "\t\t";
        // line 28
        echo "\t\t<dd class=\"avatar-container ";
        if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_AVATAR", array())) {
            echo "has-avatar";
        } else {
            echo "no-avatar";
        }
        echo "\">
\t\t\t";
        // line 29
        // line 30
        echo "\t\t\t";
        if ((isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_MESSAGE_AUTHOR"]) ? $context["U_MESSAGE_AUTHOR"] : null);
            echo "\" class=\"avatar\">";
            echo (isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null);
            echo "</a>";
        }
        // line 31
        echo "\t\t\t";
        // line 32
        echo "\t\t</dd>
\t\t<dd class=\"responsive-show ";
        // line 33
        if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG", array()))) {
            echo "has-profile-rank";
        } else {
            echo "no-profile-rank";
        }
        echo "\">
\t\t\t";
        // line 34
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        if ((isset($context["STYLE_MP_SHOW_GENDER"]) ? $context["STYLE_MP_SHOW_GENDER"] : null)) {
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POSTER_GENDER_M", array())) {
                echo " <img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/icon_gender_m.gif\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GENDER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("GENDER_M");
                echo "\" alt=\"M\" />";
            } elseif ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POSTER_GENDER_F", array())) {
                echo " <img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/icon_gender_f.gif\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GENDER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("GENDER_F");
                echo "\" alt=\"F\" />";
            }
        }
        // line 35
        echo "\t\t</dt>
\t\t";
        // line 36
        // line 37
        echo "\t\t";
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<dd class=\"profile-rank responsive-show\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</dd>";
        }
        // line 38
        echo "\t\t";
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<dd class=\"profile-rank responsive-show\">";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 39
        echo "\t\t";
        // line 40
        echo "\t\t";
        if (((isset($context["STYLE_MP_SHOW_WARNINGS"]) ? $context["STYLE_MP_SHOW_WARNINGS"] : null) && (isset($context["AUTHOR_WARNINGS"]) ? $context["AUTHOR_WARNINGS"] : null))) {
            echo "<dd class=\"profile-warnings\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["AUTHOR_WARNINGS"]) ? $context["AUTHOR_WARNINGS"] : null);
            echo "</dd>";
        }
        // line 41
        echo "\t\t";
        if (((((isset($context["STYLE_MP_SHOW_AGE"]) ? $context["STYLE_MP_SHOW_AGE"] : null) && (isset($context["AUTHOR_AGE"]) ? $context["AUTHOR_AGE"] : null)) && ((isset($context["AUTHOR_AGE"]) ? $context["AUTHOR_AGE"] : null) < 65)) && ((isset($context["AUTHOR_AGE"]) ? $context["AUTHOR_AGE"] : null) > 10))) {
            echo "<dd class=\"profile-age\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["AUTHOR_AGE"]) ? $context["AUTHOR_AGE"] : null);
            echo "</dd>";
        }
        // line 42
        echo "\t\t";
        if (((isset($context["S_RATE_ENABLED"]) ? $context["S_RATE_ENABLED"] : null) && ((isset($context["STYLE_MP_SHOW_RATING"]) ? $context["STYLE_MP_SHOW_RATING"] : null) || (isset($context["STYLE_MP_SHOW_RATING_DETAILED"]) ? $context["STYLE_MP_SHOW_RATING_DETAILED"] : null)))) {
            echo "<dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("USER_RATING");
            echo ":</strong> ";
            if (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null))) {
                if (((isset($context["STYLE_MP_SHOW_RATING"]) ? $context["STYLE_MP_SHOW_RATING"] : null) && (isset($context["STYLE_MP_SHOW_RATING_DETAILED"]) ? $context["STYLE_MP_SHOW_RATING_DETAILED"] : null))) {
                    echo (isset($context["AUTHOR_RATING"]) ? $context["AUTHOR_RATING"] : null);
                    echo " (+";
                    echo (isset($context["AUTHOR_RATING_POSITIVE"]) ? $context["AUTHOR_RATING_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["AUTHOR_RATING_NEGATIVE"]) ? $context["AUTHOR_RATING_NEGATIVE"] : null);
                    echo ")";
                } elseif ((isset($context["STYLE_MP_SHOW_RATING_DETAILED"]) ? $context["STYLE_MP_SHOW_RATING_DETAILED"] : null)) {
                    echo "+";
                    echo (isset($context["AUTHOR_RATING_POSITIVE"]) ? $context["AUTHOR_RATING_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["AUTHOR_RATING_NEGATIVE"]) ? $context["AUTHOR_RATING_NEGATIVE"] : null);
                } else {
                    echo "<span title=\"+";
                    echo (isset($context["AUTHOR_RATING_POSITIVE"]) ? $context["AUTHOR_RATING_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["AUTHOR_RATING_NEGATIVE"]) ? $context["AUTHOR_RATING_NEGATIVE"] : null);
                    echo "\">";
                    echo (isset($context["AUTHOR_RATING"]) ? $context["AUTHOR_RATING"] : null);
                    echo "</span>";
                }
            } else {
                echo (isset($context["AUTHOR_RATING"]) ? $context["AUTHOR_RATING"] : null);
            }
            echo "</dd>";
        }
        // line 43
        echo "\t\t";
        if (((isset($context["S_RATE_ENABLED"]) ? $context["S_RATE_ENABLED"] : null) && ((isset($context["STYLE_MP_SHOW_RATED"]) ? $context["STYLE_MP_SHOW_RATED"] : null) || (isset($context["STYLE_MP_SHOW_RATED_DETAILED"]) ? $context["STYLE_MP_SHOW_RATED_DETAILED"] : null)))) {
            echo "<dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("USER_RATED");
            echo ":</strong> ";
            if (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null))) {
                if (((isset($context["STYLE_MP_SHOW_RATED"]) ? $context["STYLE_MP_SHOW_RATED"] : null) && (isset($context["STYLE_MP_SHOW_RATED_DETAILED"]) ? $context["STYLE_MP_SHOW_RATED_DETAILED"] : null))) {
                    echo (isset($context["AUTHOR_RATED"]) ? $context["AUTHOR_RATED"] : null);
                    echo " (+";
                    echo (isset($context["AUTHOR_RATED_POSITIVE"]) ? $context["AUTHOR_RATED_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["AUTHOR_RATED_NEGATIVE"]) ? $context["AUTHOR_RATED_NEGATIVE"] : null);
                    echo ")";
                } elseif ((isset($context["STYLE_MP_SHOW_RATED_DETAILED"]) ? $context["STYLE_MP_SHOW_RATED_DETAILED"] : null)) {
                    echo "+";
                    echo (isset($context["AUTHOR_RATED_POSITIVE"]) ? $context["AUTHOR_RATED_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["AUTHOR_RATED_NEGATIVE"]) ? $context["AUTHOR_RATED_NEGATIVE"] : null);
                } else {
                    echo "<span title=\"+";
                    echo (isset($context["AUTHOR_RATED_POSITIVE"]) ? $context["AUTHOR_RATED_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["AUTHOR_RATED_NEGATIVE"]) ? $context["AUTHOR_RATED_NEGATIVE"] : null);
                    echo "\">";
                    echo (isset($context["AUTHOR_RATED"]) ? $context["AUTHOR_RATED"] : null);
                    echo "</span>";
                }
            } else {
                echo (isset($context["AUTHOR_RATED"]) ? $context["AUTHOR_RATED"] : null);
            }
            echo "</dd>";
        }
        // line 44
        echo "\t\t";
        if ((isset($context["STYLE_MP_SHOW_POSTS"]) ? $context["STYLE_MP_SHOW_POSTS"] : null)) {
            echo "<dd class=\"profile-posts\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            if (((isset($context["U_AUTHOR_POSTS"]) ? $context["U_AUTHOR_POSTS"] : null) != "")) {
                echo "<a href=\"";
                echo (isset($context["U_AUTHOR_POSTS"]) ? $context["U_AUTHOR_POSTS"] : null);
                echo "\">";
                echo (isset($context["AUTHOR_POSTS"]) ? $context["AUTHOR_POSTS"] : null);
                echo "</a>";
            } else {
                echo (isset($context["AUTHOR_POSTS"]) ? $context["AUTHOR_POSTS"] : null);
            }
            echo "</dd>";
        }
        // line 45
        echo "\t\t";
        if (((isset($context["STYLE_MP_SHOW_JOINED"]) ? $context["STYLE_MP_SHOW_JOINED"] : null) && (isset($context["AUTHOR_JOINED"]) ? $context["AUTHOR_JOINED"] : null))) {
            echo "<dd class=\"profile-joined\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["AUTHOR_JOINED"]) ? $context["AUTHOR_JOINED"] : null);
            echo "</dd>";
        }
        // line 46
        echo "\t\t";
        if (((isset($context["STYLE_MP_SHOW_WITH_US"]) ? $context["STYLE_MP_SHOW_WITH_US"] : null) && (isset($context["AUTHOR_WITH_US"]) ? $context["AUTHOR_WITH_US"] : null))) {
            echo "<dd class=\"profile-with_us\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("USER_WITH_US");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["AUTHOR_WITH_US"]) ? $context["AUTHOR_WITH_US"] : null);
            echo "</dd>";
        }
        // line 47
        echo "
\t\t";
        // line 48
        // line 49
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 50
            echo "\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 51
                echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t";
            }
            // line 53
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t";
        // line 55
        echo "
\t\t";
        // line 56
        // line 57
        echo "\t\t";
        if (((isset($context["STYLE_MP_SHOW_BUTTONS"]) ? $context["STYLE_MP_SHOW_BUTTONS"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "contact", array())))) {
            // line 58
            echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "contact", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 60
                echo "\t\t\t\t\t\t<a class=\"button contact-button\" href=\"";
                if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                    echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                } else {
                    echo $this->getAttribute($context["contact"], "U_PROFILE_AUTHOR", array());
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["contact"], "NAME", array());
                echo "\"";
                if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                    echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                }
                echo ">
\t\t\t\t\t\t\t<span class=\"contact-icon ";
                // line 61
                echo $this->getAttribute($context["contact"], "ID", array());
                echo "-icon\">";
                echo $this->getAttribute($context["contact"], "NAME", array());
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t</dd>
\t\t";
        }
        // line 66
        echo "\t\t";
        // line 67
        echo "\t</dl>

\t<div class=\"postbody\">
\t\t<h3>";
        // line 70
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "</h3>

\t\t";
        // line 72
        $value = ((((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null) || (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) || (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) || (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null));
        $context['definition']->set('SHOW_PM_POST_BUTTONS', $value);
        // line 73
        echo "\t\t";
        // line 74
        echo "\t\t";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_PM_POST_BUTTONS", array())) {
            // line 75
            echo "\t\t<ul class=\"post-buttons\">
\t\t\t";
            // line 76
            // line 77
            echo "\t\t\t";
            if ((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) {
                // line 78
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 79
                echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_EDIT_PM");
                echo "\" class=\"button icon-button edit-icon\"><span>";
                echo $this->env->getExtension('phpbb')->lang("POST_EDIT_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 82
            echo "\t\t\t";
            if ((isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) {
                // line 83
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 84
                echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                echo "\" class=\"button icon-button delete-icon\"><span>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 87
            echo "\t\t\t";
            if ((isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) {
                // line 88
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 89
                echo (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("REPORT_PM");
                echo "\" class=\"button icon-button report-icon\"><span>";
                echo $this->env->getExtension('phpbb')->lang("REPORT_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 92
            echo "\t\t\t";
            if ((isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null)) {
                // line 93
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 94
                echo (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_QUOTE_PM");
                echo "\" class=\"button icon-button quote-icon\"><span>";
                echo $this->env->getExtension('phpbb')->lang("POST_QUOTE_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 97
            echo "\t\t\t";
            // line 98
            echo "\t\t</ul>
\t\t";
        }
        // line 100
        echo "\t\t";
        // line 101
        echo "
\t\t<p class=\"author\">
\t\t\t<strong>";
        // line 103
        echo $this->env->getExtension('phpbb')->lang("SENT_AT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["SENT_DATE"]) ? $context["SENT_DATE"] : null);
        echo "
\t\t\t<br /><strong>";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("PM_FROM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "
\t\t\t";
        // line 105
        if ((isset($context["S_TO_RECIPIENT"]) ? $context["S_TO_RECIPIENT"] : null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb')->lang("TO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if ($this->getAttribute($context["to_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["to_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["to_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["to_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 106
        echo "\t\t\t";
        if ((isset($context["S_BCC_RECIPIENT"]) ? $context["S_BCC_RECIPIENT"] : null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb')->lang("BCC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if ($this->getAttribute($context["bcc_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["bcc_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["bcc_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 107
        echo "\t\t</p>


\t\t<div class=\"content\">";
        // line 110
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</div>

\t\t";
        // line 112
        if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
            // line 113
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "
\t\t\t\t</dt>
\t\t\t\t";
            // line 117
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 118
                echo "\t\t\t\t\t<dd>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t\t</dl>
\t\t";
        }
        // line 122
        echo "
\t\t";
        // line 123
        if ((isset($context["S_DISPLAY_NOTICE"]) ? $context["S_DISPLAY_NOTICE"] : null)) {
            // line 124
            echo "\t\t\t<div class=\"post-notice error\">";
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t";
        }
        // line 126
        echo "
\t\t";
        // line 127
        if (((isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null) || (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null))) {
            // line 128
            echo "\t\t<div class=\"notice\">";
            echo (isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null);
            echo "
\t\t\t";
            // line 129
            if ((isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <em>";
                echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                echo "</em>";
            }
            // line 130
            echo "\t\t</div>
\t\t";
        }
        // line 132
        echo "
\t\t";
        // line 133
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 134
            echo "\t\t\t<div id=\"sig";
            echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
            echo "\" class=\"signature\">";
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t\t";
        }
        // line 136
        echo "\t</div>

\t</div>
</div>

";
        // line 141
        if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
            // line 142
            echo "<fieldset class=\"display-options\">
\t";
            // line 143
            if ((isset($context["U_PREVIOUS_PM"]) ? $context["U_PREVIOUS_PM"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PREVIOUS_PM"]) ? $context["U_PREVIOUS_PM"] : null);
                echo "\" class=\"left-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_PM");
                echo "</a>";
            }
            // line 144
            echo "\t";
            if ((isset($context["U_NEXT_PM"]) ? $context["U_NEXT_PM"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_NEXT_PM"]) ? $context["U_NEXT_PM"] : null);
                echo "\" class=\"right-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_PM");
                echo "</a>";
            }
            // line 145
            echo "
\t";
            // line 146
            if ((isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null)) {
                echo "<label for=\"mark_option\"><select name=\"mark_option\" id=\"mark_option\">";
                echo (isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null);
                echo "</select></label>&nbsp;<input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />";
            }
            // line 147
            echo "\t";
            if (( !(isset($context["S_UNREAD"]) ? $context["S_UNREAD"] : null) &&  !(isset($context["S_SPECIAL_FOLDER"]) ? $context["S_SPECIAL_FOLDER"] : null))) {
                echo "<label for=\"dest_folder\">";
                if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MOVE_TO_FOLDER");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MOVE_MARKED_TO_FOLDER");
                }
                echo " <select name=\"dest_folder\" id=\"dest_folder\">";
                echo (isset($context["S_TO_FOLDER_OPTIONS"]) ? $context["S_TO_FOLDER_OPTIONS"] : null);
                echo "</select></label> <input class=\"button2\" type=\"submit\" name=\"move_pm\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />";
            }
            // line 148
            echo "\t<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"";
            echo (isset($context["MSG_ID"]) ? $context["MSG_ID"] : null);
            echo "\" />
\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
            // line 149
            echo (isset($context["CUR_FOLDER_ID"]) ? $context["CUR_FOLDER_ID"] : null);
            echo "\" />
\t<input type=\"hidden\" name=\"p\" value=\"";
            // line 150
            echo (isset($context["MSG_ID"]) ? $context["MSG_ID"] : null);
            echo "\" />
</fieldset>
";
        }
        // line 153
        echo "
";
        // line 154
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewmessage.html", 154)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 155
        echo "
";
        // line 156
        if ((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "ucp_pm_viewmessage.html", 156)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 157
        echo "
";
        // line 158
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewmessage.html", 158)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 158,  797 => 157,  783 => 156,  780 => 155,  768 => 154,  765 => 153,  759 => 150,  755 => 149,  750 => 148,  733 => 147,  725 => 146,  722 => 145,  711 => 144,  701 => 143,  698 => 142,  696 => 141,  689 => 136,  681 => 134,  679 => 133,  676 => 132,  672 => 130,  663 => 129,  658 => 128,  656 => 127,  653 => 126,  647 => 124,  645 => 123,  642 => 122,  638 => 120,  629 => 118,  625 => 117,  620 => 115,  616 => 113,  614 => 112,  609 => 110,  604 => 107,  573 => 106,  543 => 105,  536 => 104,  529 => 103,  525 => 101,  523 => 100,  519 => 98,  517 => 97,  507 => 94,  504 => 93,  501 => 92,  491 => 89,  488 => 88,  485 => 87,  475 => 84,  472 => 83,  469 => 82,  459 => 79,  456 => 78,  453 => 77,  452 => 76,  449 => 75,  446 => 74,  444 => 73,  441 => 72,  436 => 70,  431 => 67,  429 => 66,  425 => 64,  414 => 61,  399 => 60,  395 => 59,  392 => 58,  389 => 57,  388 => 56,  385 => 55,  383 => 54,  377 => 53,  366 => 51,  363 => 50,  358 => 49,  357 => 48,  354 => 47,  344 => 46,  334 => 45,  316 => 44,  283 => 43,  250 => 42,  240 => 41,  230 => 40,  228 => 39,  221 => 38,  214 => 37,  213 => 36,  210 => 35,  187 => 34,  179 => 33,  176 => 32,  174 => 31,  165 => 30,  164 => 29,  155 => 28,  153 => 27,  146 => 26,  139 => 25,  138 => 24,  135 => 23,  112 => 22,  104 => 21,  100 => 20,  87 => 17,  83 => 15,  79 => 13,  68 => 12,  58 => 11,  55 => 10,  53 => 9,  46 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}

<?php

/* memberlist_view.html */
class __TwigTemplate_708c6db231296d80c0dfd9e44124ca57d5b1b5509ce5e25b0ec354a4f527cd90 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"memberlist-title\">";
        // line 3
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>

";
        // line 5
        // line 6
        echo "
<form method=\"post\" action=\"";
        // line 7
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" id=\"viewprofile\">
<div class=\"panel bg1";
        // line 8
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
\t<div class=\"inner\">

\t";
        // line 11
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 12
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt class=\"profile-avatar\">";
            // line 13
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "</dt>
\t\t\t";
            // line 14
            // line 15
            echo "\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "<dd style=\"text-align: center;\">";
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</dd>";
            }
            // line 16
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo "<dd style=\"text-align: center;\">";
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</dd>";
            }
            // line 17
            echo "\t\t\t";
            // line 18
            echo "\t\t</dl>
\t";
        }
        // line 20
        echo "
\t<dl class=\"left-box details profile-details\">
\t\t<dt>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t<dd>
\t\t\t";
        // line 24
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color: ";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</span>
\t\t\t";
        // line 25
        if ((isset($context["S_GENDER_M"]) ? $context["S_GENDER_M"] : null)) {
            echo "<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/icon_gender_m.gif\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("GENDER");
            echo ": ";
            echo $this->env->getExtension('phpbb')->lang("GENDER_M");
            echo "\" alt=\"M\" />";
        } elseif ((isset($context["S_GENDER_F"]) ? $context["S_GENDER_F"] : null)) {
            echo "<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/icon_gender_f.gif\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("GENDER");
            echo ": ";
            echo $this->env->getExtension('phpbb')->lang("GENDER_F");
            echo "\" alt=\"F\" />";
        }
        // line 26
        echo "\t\t\t";
        if ((isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 27
        echo "\t\t\t";
        if ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 28
        echo "\t\t\t";
        if ((isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 29
        echo "\t\t\t";
        if ((isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 30
        echo "\t\t</dd>
\t\t";
        // line 31
        if ( !(isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 32
            echo "\t\t\t";
            // line 33
            echo "\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "<dt>";
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</dd>";
            }
            // line 34
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo "<dt>";
                if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("RANK");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                }
                echo "</dt> <dd>";
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</dd>";
            }
            // line 35
            echo "\t\t\t";
            // line 36
            echo "\t\t";
        }
        // line 37
        echo "\t\t";
        if ((isset($context["S_USER_INACTIVE"]) ? $context["S_USER_INACTIVE"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["USER_INACTIVE_REASON"]) ? $context["USER_INACTIVE_REASON"] : null);
            echo "</dd>";
        }
        // line 38
        echo "\t\t";
        if ((((isset($context["AGE"]) ? $context["AGE"] : null) && ((isset($context["AGE"]) ? $context["AGE"] : null) < 65)) && ((isset($context["AGE"]) ? $context["AGE"] : null) > 10))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["AGE"]) ? $context["AGE"] : null);
            echo "</dd>";
        }
        // line 39
        echo "\t\t";
        if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 40
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 41
            echo "\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 42
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t";
            }
            // line 44
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t";
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_ZEBRA"]) ? $context["S_ZEBRA"] : null))) {
            // line 46
            echo "\t\t\t";
            if ((isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null)) {
                // line 47
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo (isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t";
            } elseif (            // line 48
(isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null)) {
                // line 49
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo (isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t";
                if ((isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null)) {
                    // line 52
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo (isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t";
                if ((isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null)) {
                    // line 55
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo (isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 57
                echo "\t\t\t";
            }
            // line 58
            echo "\t\t";
        }
        // line 59
        echo "\t</dl>

\t</div>
</div>

";
        // line 64
        // line 65
        echo "<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<div class=\"column2\">
\t\t<h3>";
        // line 69
        echo $this->env->getExtension('phpbb')->lang("CONTACT_USER");
        echo "</h3>

\t\t<dl class=\"details\">
\t\t";
        // line 72
        if ((isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 73
        echo "\t\t";
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("PM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 74
        echo "\t\t";
        if (((isset($context["U_JABBER"]) ? $context["U_JABBER"] : null) && (isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_JABBER"]) ? $context["U_JABBER"] : null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif ((isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null);
            echo "</dd>";
        }
        // line 75
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 76
            echo "\t\t\t";
            if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 77
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 78
                if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                    // line 79
                    echo "\t\t\t\t\t<dd><a href=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                    echo "\"";
                    if ((isset($context["EXTERNAL_LINKS_NEWWINDOW"]) ? $context["EXTERNAL_LINKS_NEWWINDOW"] : null)) {
                        echo " target=\"_blank\"";
                    }
                    if ((isset($context["EXTERNAL_LINKS_NOFOLLOW"]) ? $context["EXTERNAL_LINKS_NOFOLLOW"] : null)) {
                        echo " rel=\"nofollow\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 81
                    echo "\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t\t";
                }
                // line 83
                echo "\t\t\t";
            }
            // line 84
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t";
        if ((isset($context["S_PROFILE_FIELD1"]) ? $context["S_PROFILE_FIELD1"] : null)) {
            // line 86
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 87
            echo (isset($context["PROFILE_FIELD1_NAME"]) ? $context["PROFILE_FIELD1_NAME"] : null);
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["PROFILE_FIELD1_VALUE"]) ? $context["PROFILE_FIELD1_VALUE"] : null);
            echo "</dd>
\t\t";
        }
        // line 89
        echo "\t\t";
        if (((isset($context["USER_AGENT"]) ? $context["USER_AGENT"] : null) && ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null) || (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_AGENT");
            echo ":</dt> <dd>";
            echo (isset($context["USER_AGENT"]) ? $context["USER_AGENT"] : null);
            echo "</dd>";
        }
        // line 90
        echo "\t\t";
        if (((isset($context["USER_LAST_IP"]) ? $context["USER_LAST_IP"] : null) && ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null) || (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_LAST_IP");
            echo ":</dt> <dd>";
            echo (isset($context["USER_LAST_IP"]) ? $context["USER_LAST_IP"] : null);
            echo "</dd>";
        }
        // line 91
        echo "\t\t</dl>

\t\t";
        // line 93
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 94
            echo "\t\t<h3>";
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE");
            echo "</h3>
\t\t<div class=\"signature\" style=\"border-top:none;\">";
            // line 95
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t\t";
        }
        // line 97
        echo "\t</div>

\t<div class=\"column1\">
\t\t<h3>";
        // line 100
        echo $this->env->getExtension('phpbb')->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 102
        // line 103
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</dd>
\t\t\t<dt>";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        echo (isset($context["LAST_ACTIVE"]) ? $context["LAST_ACTIVE"] : null);
        echo "</dd>
\t\t\t";
        // line 105
        if ((((isset($context["STYLE_P_SHOW_RATING"]) ? $context["STYLE_P_SHOW_RATING"] : null) || (isset($context["STYLE_P_SHOW_RATING_DETAILED"]) ? $context["STYLE_P_SHOW_RATING_DETAILED"] : null)) && (isset($context["S_RATING"]) ? $context["S_RATING"] : null))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_RATING");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null))) {
                if (((isset($context["STYLE_P_SHOW_RATING"]) ? $context["STYLE_P_SHOW_RATING"] : null) && (isset($context["STYLE_P_SHOW_RATING_DETAILED"]) ? $context["STYLE_P_SHOW_RATING_DETAILED"] : null))) {
                    echo (isset($context["RATING"]) ? $context["RATING"] : null);
                    echo " (+";
                    echo (isset($context["RATING_POSITIVE"]) ? $context["RATING_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["RATING_NEGATIVE"]) ? $context["RATING_NEGATIVE"] : null);
                    echo ")";
                } elseif ((isset($context["STYLE_P_SHOW_RATING_DETAILED"]) ? $context["STYLE_P_SHOW_RATING_DETAILED"] : null)) {
                    echo "+";
                    echo (isset($context["RATING_POSITIVE"]) ? $context["RATING_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["RATING_NEGATIVE"]) ? $context["RATING_NEGATIVE"] : null);
                } else {
                    echo "<span title=\"+";
                    echo (isset($context["RATING_POSITIVE"]) ? $context["RATING_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["RATING_NEGATIVE"]) ? $context["RATING_NEGATIVE"] : null);
                    echo "\">";
                    echo (isset($context["RATING"]) ? $context["RATING"] : null);
                    echo "</span>";
                }
            } else {
                echo (isset($context["RATING"]) ? $context["RATING"] : null);
            }
            echo "</dd>";
        }
        // line 106
        echo "\t\t\t";
        if ((((isset($context["STYLE_P_SHOW_RATED"]) ? $context["STYLE_P_SHOW_RATED"] : null) || (isset($context["STYLE_P_SHOW_RATED_DETAILED"]) ? $context["STYLE_P_SHOW_RATED_DETAILED"] : null)) && (isset($context["S_RATING"]) ? $context["S_RATING"] : null))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_RATED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null))) {
                if (((isset($context["STYLE_P_SHOW_RATED"]) ? $context["STYLE_P_SHOW_RATED"] : null) && (isset($context["STYLE_P_SHOW_RATED_DETAILED"]) ? $context["STYLE_P_SHOW_RATED_DETAILED"] : null))) {
                    echo (isset($context["RATED"]) ? $context["RATED"] : null);
                    echo " (+";
                    echo (isset($context["RATED_POSITIVE"]) ? $context["RATED_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["RATED_NEGATIVE"]) ? $context["RATED_NEGATIVE"] : null);
                    echo ")";
                } elseif ((isset($context["STYLE_P_SHOW_RATED_DETAILED"]) ? $context["STYLE_P_SHOW_RATED_DETAILED"] : null)) {
                    echo "+";
                    echo (isset($context["RATED_POSITIVE"]) ? $context["RATED_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["RATED_NEGATIVE"]) ? $context["RATED_NEGATIVE"] : null);
                } else {
                    echo "<span title=\"+";
                    echo (isset($context["RATED_POSITIVE"]) ? $context["RATED_POSITIVE"] : null);
                    echo "/−";
                    echo (isset($context["RATED_NEGATIVE"]) ? $context["RATED_NEGATIVE"] : null);
                    echo "\">";
                    echo (isset($context["RATED"]) ? $context["RATED"] : null);
                    echo "</span>";
                }
            } else {
                echo (isset($context["RATED"]) ? $context["RATED"] : null);
            }
            echo "</dd>";
        }
        // line 107
        echo "\t\t\t";
        if ((isset($context["S_WARNINGS"]) ? $context["S_WARNINGS"] : null)) {
            // line 108
            echo "\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 109
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "</strong>";
            if (((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null) || (isset($context["U_WARN"]) ? $context["U_WARN"] : null))) {
                echo " [ ";
                if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_NOTES"]) ? $context["U_NOTES"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if ((isset($context["U_WARN"]) ? $context["U_WARN"] : null)) {
                    if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    echo (isset($context["U_WARN"]) ? $context["U_WARN"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t";
        }
        // line 111
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 112
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo " ";
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            echo "| <strong><a href=\"";
            echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 113
        echo "\t\t\t\t\t";
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo "<br />(";
            echo (isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null);
            echo " / ";
            echo (isset($context["POSTS_DAY"]) ? $context["POSTS_DAY"] : null);
            echo ")";
        }
        // line 114
        echo "\t\t\t\t\t";
        if (((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null) && (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null))) {
            echo "<br />(<a href=\"";
            echo (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif ((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null)) {
            echo "<br />(";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 115
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 116
        if (((isset($context["S_SHOW_ACTIVITY"]) ? $context["S_SHOW_ACTIVITY"] : null) && (isset($context["POSTS"]) ? $context["POSTS"] : null))) {
            // line 117
            echo "\t\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
                echo "<strong><a href=\"";
                echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
                echo "</a></strong><br />(";
                echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 118
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
                echo "<strong><a href=\"";
                echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
                echo "</a></strong><br />(";
                echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 120
        echo "\t\t\t";
        // line 121
        echo "\t\t</dl>
\t</div>

\t</div>
</div>
";
        // line 126
        // line 127
        echo "
</form>

";
        // line 130
        // line 131
        echo "
";
        // line 132
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 132)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 133
        echo "
";
        // line 134
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 134)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 134,  702 => 133,  690 => 132,  687 => 131,  686 => 130,  681 => 127,  680 => 126,  673 => 121,  671 => 120,  651 => 118,  631 => 117,  629 => 116,  626 => 115,  613 => 114,  604 => 113,  594 => 112,  588 => 111,  560 => 109,  554 => 108,  551 => 107,  517 => 106,  484 => 105,  477 => 104,  469 => 103,  468 => 102,  463 => 100,  458 => 97,  453 => 95,  448 => 94,  446 => 93,  442 => 91,  433 => 90,  424 => 89,  416 => 87,  413 => 86,  410 => 85,  404 => 84,  401 => 83,  395 => 81,  380 => 79,  378 => 78,  372 => 77,  369 => 76,  364 => 75,  345 => 74,  333 => 73,  322 => 72,  316 => 69,  310 => 65,  309 => 64,  302 => 59,  299 => 58,  296 => 57,  288 => 55,  285 => 54,  277 => 52,  274 => 51,  266 => 49,  264 => 48,  257 => 47,  254 => 46,  251 => 45,  245 => 44,  236 => 42,  233 => 41,  228 => 40,  216 => 39,  206 => 38,  196 => 37,  193 => 36,  191 => 35,  177 => 34,  167 => 33,  165 => 32,  163 => 31,  160 => 30,  151 => 29,  142 => 28,  133 => 27,  124 => 26,  106 => 25,  95 => 24,  89 => 22,  85 => 20,  81 => 18,  79 => 17,  72 => 16,  65 => 15,  64 => 14,  60 => 13,  57 => 12,  55 => 11,  47 => 8,  43 => 7,  40 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}

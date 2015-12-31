<?php

/* viewtopic_body.html */
class __TwigTemplate_3d387a246f95e1e992fa6f7334e9dfe11c62c0b16be17f698efd1abfccaae093 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "header_icons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("header_icons.html", "viewtopic_body.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
<h2 class=\"topic-title\">";
        // line 5
        echo "<a href=\"";
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a>";
        echo "</h2>

";
        // line 7
        $location = "header_path.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("header_path.html", "viewtopic_body.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
";
        // line 9
        if ((((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null) || (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) || (isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null))) {
            // line 10
            echo "<p style=\"display: none\">
\t";
            // line 11
            if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_DESC");
                echo ":</strong> ";
                echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
                echo "<br />";
            }
            // line 12
            echo "\t";
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
            // line 13
            echo "\t";
            if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
                echo "<strong>";
                if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MODERATORS");
                }
                echo ":</strong> ";
                echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
                echo "<br />";
            }
            // line 14
            echo "</p>
";
        }
        // line 16
        echo "
<div class=\"action-bar top\">

\t<div class=\"buttons\">
\t\t";
        // line 20
        // line 21
        echo "
\t";
        // line 22
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 23
            echo "\t\t<a rel=\"nofollow\" href=\"";
            echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
            echo "\" class=\"button icon-button ";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 24
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            // line 25
            echo "\t\t</a>
\t";
        }
        // line 27
        echo "
\t\t";
        // line 28
        // line 29
        echo "\t</div>

\t";
        // line 31
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 32
        echo "\t";
        // line 33
        echo "
\t";
        // line 34
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 35
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 36
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t<a href=\"";
            // line 40
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t";
            // line 41
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 46
        echo "
\t";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 48
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 49
            if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo "
\t\t\t";
            // line 50
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 51
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 51)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 52
                echo "\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t&bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 55
            echo "\t\t</div>
\t";
        }
        // line 57
        echo "\t";
        // line 58
        echo "</div>

";
        // line 60
        // line 61
        echo "
";
        // line 62
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 63
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_POLL_ACTION"]) ? $context["S_POLL_ACTION"] : null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 69
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
            if (((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null) && (isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null))) {
                echo "<br />";
            }
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 74
                echo "\t\t\t\t";
                // line 75
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo "voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t<dt>";
                // line 76
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                }
                echo "</dt>
\t\t\t\t\t";
                // line 77
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 78
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t<div class=\"";
                // line 79
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT_REL", array());
                echo ";\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                echo "</div>
\t\t\t\t\t\t";
                // line 80
                if ((isset($context["S_SHOW_VOTERS"]) ? $context["S_SHOW_VOTERS"] : null)) {
                    echo "<span class=\"poll_voters_box\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_VOTERS", array());
                    echo "</span>";
                }
                // line 81
                echo "\t\t\t\t\t</dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 82
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo "\">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 84
                // line 85
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 87
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("TOTAL_VOTERS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo (isset($context["TOTAL_VOTERS"]) ? $context["TOTAL_VOTERS"] : null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 92
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 93
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">
\t\t\t\t\t\t<input type=\"submit\" name=\"update\" value=\"";
                // line 96
                if ((isset($context["POLL_VOTED"]) ? $context["POLL_VOTED"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("SUBMIT_REVOTE");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("SUBMIT_VOTE");
                }
                echo "\" class=\"button1\" />
\t\t\t\t\t\t<input type=\"submit\" name=\"unvote\" value=\"";
                // line 97
                echo $this->env->getExtension('phpbb')->lang("SUBMIT_UNVOTE");
                echo "\" class=\"button2";
                if ( !(isset($context["POLL_VOTED"]) ? $context["POLL_VOTED"] : null)) {
                    echo " hidden";
                }
                echo "\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 101
            echo "
\t\t\t";
            // line 102
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                // line 103
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 105
                echo (isset($context["U_VIEW_RESULTS"]) ? $context["U_VIEW_RESULTS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 108
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 109
            echo $this->env->getExtension('phpbb')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 113
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t";
            // line 114
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t</div>

\t</form>
";
        }
        // line 119
        echo "
";
        // line 120
        // line 121
        echo "
";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 123
            echo "\t";
            // line 124
            echo "\t";
            if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LAST_POST_FIRST", array()) && ($this->getAttribute($context["postrow"], "POST_NUMBER", array()) != 2))) {
                echo "<hr />";
            }
            // line 125
            echo "\t";
            if (($this->getAttribute($context["postrow"], "POST_NUMBER", array()) == 1)) {
                $value = 1;
                $context['definition']->set('LAST_POST_FIRST', $value);
            } else {
                $value = 0;
                $context['definition']->set('LAST_POST_FIRST', $value);
            }
            // line 126
            echo "\t";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                // line 127
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if ((isset($context["S_UNREAD_VIEW"]) ? $context["S_UNREAD_VIEW"] : null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 129
            echo "\t<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"post has-profile ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array()))) {
                echo " online";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            if ($this->getAttribute($context["postrow"], "S_GUEST", array())) {
                echo " post-guest";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 132
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 133
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " responsive-hide\">
\t\t\t\t";
            // line 134
            // line 135
            echo "\t\t\t\t";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            if ((isset($context["STYLE_MP_SHOW_GENDER"]) ? $context["STYLE_MP_SHOW_GENDER"] : null)) {
                if ($this->getAttribute($context["postrow"], "S_POSTER_GENDER_M", array())) {
                    echo " <img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/icon_gender_m.gif\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("GENDER");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("GENDER_M");
                    echo "\" alt=\"M\" />";
                } elseif ($this->getAttribute($context["postrow"], "S_POSTER_GENDER_F", array())) {
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
            // line 136
            echo "\t\t\t\t";
            // line 137
            echo "\t\t\t</dt>
\t\t\t";
            // line 138
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || ((isset($context["STYLE_MP_SHOW_TOPIC_POSTER"]) ? $context["STYLE_MP_SHOW_TOPIC_POSTER"] : null) && $this->getAttribute($context["postrow"], "S_TOPIC_POSTER", array())))) {
                echo "<dd class=\"profile-rank responsive-hide\">";
                if (((isset($context["STYLE_MP_SHOW_TOPIC_POSTER"]) ? $context["STYLE_MP_SHOW_TOPIC_POSTER"] : null) && $this->getAttribute($context["postrow"], "S_TOPIC_POSTER", array()))) {
                    echo $this->env->getExtension('phpbb')->lang("TOPIC_POSTER");
                }
                if ((($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && (isset($context["STYLE_MP_SHOW_TOPIC_POSTER"]) ? $context["STYLE_MP_SHOW_TOPIC_POSTER"] : null)) && $this->getAttribute($context["postrow"], "S_TOPIC_POSTER", array()))) {
                    echo ", ";
                }
                if ($this->getAttribute($context["postrow"], "RANK_TITLE", array())) {
                    echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                }
                echo "</dd>";
            }
            // line 139
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "RANK_IMG", array())) {
                echo "<dd class=\"profile-rank responsive-hide\">";
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</dd>";
            }
            // line 140
            echo "\t\t\t<dd class=\"avatar-container ";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t";
            // line 141
            // line 142
            echo "\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 143
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</span>";
                }
                // line 144
                echo "\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t";
            // line 146
            echo "\t\t\t</dd>
\t\t\t<dd class=\"";
            // line 147
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " responsive-show\">
\t\t\t\t";
            // line 148
            // line 149
            echo "\t\t\t\t";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            if ((isset($context["STYLE_MP_SHOW_GENDER"]) ? $context["STYLE_MP_SHOW_GENDER"] : null)) {
                if ($this->getAttribute($context["postrow"], "S_POSTER_GENDER_M", array())) {
                    echo " <img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/icon_gender_m.gif\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("GENDER");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("GENDER_M");
                    echo "\" alt=\"M\" />";
                } elseif ($this->getAttribute($context["postrow"], "S_POSTER_GENDER_F", array())) {
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
            // line 150
            echo "\t\t\t";
            // line 151
            echo "\t\t\t</dd>
\t\t\t";
            // line 152
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || ((isset($context["STYLE_MP_SHOW_TOPIC_POSTER"]) ? $context["STYLE_MP_SHOW_TOPIC_POSTER"] : null) && $this->getAttribute($context["postrow"], "S_TOPIC_POSTER", array())))) {
                echo "<dd class=\"profile-rank responsive-show\">";
                if (((isset($context["STYLE_MP_SHOW_TOPIC_POSTER"]) ? $context["STYLE_MP_SHOW_TOPIC_POSTER"] : null) && $this->getAttribute($context["postrow"], "S_TOPIC_POSTER", array()))) {
                    echo $this->env->getExtension('phpbb')->lang("TOPIC_POSTER");
                }
                if ((($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && (isset($context["STYLE_MP_SHOW_TOPIC_POSTER"]) ? $context["STYLE_MP_SHOW_TOPIC_POSTER"] : null)) && $this->getAttribute($context["postrow"], "S_TOPIC_POSTER", array()))) {
                    echo ", ";
                }
                if ($this->getAttribute($context["postrow"], "RANK_TITLE", array())) {
                    echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                }
                echo "</dd>";
            }
            // line 153
            echo "\t\t\t";
            // line 154
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "RANK_IMG", array())) {
                echo "<dd class=\"profile-rank responsive-show\">";
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</dd>";
            }
            // line 155
            echo "\t\t\t";
            // line 156
            echo "\t\t\t";
            if (((isset($context["STYLE_MP_SHOW_WARNINGS"]) ? $context["STYLE_MP_SHOW_WARNINGS"] : null) && $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array()))) {
                // line 157
                echo "\t\t\t<dd class=\"wcards\">
\t\t\t\t";
                // line 158
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "userwarning", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["userwarning"]) {
                    // line 159
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["userwarning"], "U_POST", array())) {
                        // line 160
                        echo "\t\t\t\t\t\t<a rel=\"nofollow\" href=\"";
                        echo $this->getAttribute($context["userwarning"], "U_POST", array());
                        echo "\"
\t\t\t\t\t";
                    } else {
                        // line 162
                        echo "\t\t\t\t\t\t<span
\t\t\t\t\t";
                    }
                    // line 164
                    echo "\t\t\t\t\tclass=\"wcard ";
                    echo $this->getAttribute($context["userwarning"], "TYPE", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["userwarning"], "TITLE", array());
                    echo "\">";
                    echo $this->getAttribute($context["userwarning"], "TYPE_SHORT", array());
                    echo "
\t\t\t\t\t";
                    // line 165
                    if ($this->getAttribute($context["userwarning"], "U_POST", array())) {
                        echo "</a>";
                    } else {
                        echo "</span>";
                    }
                    // line 166
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userwarning'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "\t\t\t\t</dd>
\t\t\t";
            }
            // line 169
            echo "\t\t";
            if (((((isset($context["STYLE_MP_SHOW_AGE"]) ? $context["STYLE_MP_SHOW_AGE"] : null) && $this->getAttribute($context["postrow"], "POSTER_AGE", array())) && ($this->getAttribute($context["postrow"], "POSTER_AGE", array()) < 65)) && ($this->getAttribute($context["postrow"], "POSTER_AGE", array()) > 10))) {
                echo "<dd class=\"profile-age\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("AGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_AGE", array());
                echo "</dd>";
            }
            // line 170
            echo "\t\t\t";
            if ((((isset($context["STYLE_MP_SHOW_RATING"]) ? $context["STYLE_MP_SHOW_RATING"] : null) || (isset($context["STYLE_MP_SHOW_RATING_DETAILED"]) ? $context["STYLE_MP_SHOW_RATING_DETAILED"] : null)) && $this->getAttribute($context["postrow"], "S_POSTER_RATING", array()))) {
                echo "<dd><strong>";
                echo $this->env->getExtension('phpbb')->lang("USER_RATING");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null))) {
                    if (((isset($context["STYLE_MP_SHOW_RATING"]) ? $context["STYLE_MP_SHOW_RATING"] : null) && (isset($context["STYLE_MP_SHOW_RATING_DETAILED"]) ? $context["STYLE_MP_SHOW_RATING_DETAILED"] : null))) {
                        echo $this->getAttribute($context["postrow"], "POSTER_RATING", array());
                        echo " (+";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATING_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATING_NEGATIVE", array());
                        echo ")";
                    } elseif ((isset($context["STYLE_MP_SHOW_RATING_DETAILED"]) ? $context["STYLE_MP_SHOW_RATING_DETAILED"] : null)) {
                        echo "+";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATING_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATING_NEGATIVE", array());
                    } else {
                        echo "<span title=\"+";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATING_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATING_NEGATIVE", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATING", array());
                        echo "</span>";
                    }
                } else {
                    echo $this->getAttribute($context["postrow"], "POSTER_RATING", array());
                }
                echo "</dd>";
            }
            // line 171
            echo "\t\t\t";
            if ((((isset($context["STYLE_MP_SHOW_RATED"]) ? $context["STYLE_MP_SHOW_RATED"] : null) || (isset($context["STYLE_MP_SHOW_RATED_DETAILED"]) ? $context["STYLE_MP_SHOW_RATED_DETAILED"] : null)) && $this->getAttribute($context["postrow"], "S_POSTER_RATING", array()))) {
                echo "<dd><strong>";
                echo $this->env->getExtension('phpbb')->lang("USER_RATED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null))) {
                    if (((isset($context["STYLE_MP_SHOW_RATED"]) ? $context["STYLE_MP_SHOW_RATED"] : null) && (isset($context["STYLE_MP_SHOW_RATED_DETAILED"]) ? $context["STYLE_MP_SHOW_RATED_DETAILED"] : null))) {
                        echo $this->getAttribute($context["postrow"], "POSTER_RATED", array());
                        echo " (+";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATED_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATED_NEGATIVE", array());
                        echo ")";
                    } elseif ((isset($context["STYLE_MP_SHOW_RATED_DETAILED"]) ? $context["STYLE_MP_SHOW_RATED_DETAILED"] : null)) {
                        echo "+";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATED_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATED_NEGATIVE", array());
                    } else {
                        echo "<span title=\"+";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATED_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATED_NEGATIVE", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "POSTER_RATED", array());
                        echo "</span>";
                    }
                } else {
                    echo $this->getAttribute($context["postrow"], "POSTER_RATED", array());
                }
                echo "</dd>";
            }
            // line 172
            echo "\t\t";
            if (((isset($context["STYLE_MP_SHOW_POSTS"]) ? $context["STYLE_MP_SHOW_POSTS"] : null) && ($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != ""))) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
                    echo "\">";
                }
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 173
            echo "\t\t";
            if (((isset($context["STYLE_MP_SHOW_JOINED"]) ? $context["STYLE_MP_SHOW_JOINED"] : null) && $this->getAttribute($context["postrow"], "POSTER_JOINED", array()))) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</dd>";
            }
            // line 174
            echo "\t\t";
            if (((isset($context["STYLE_MP_SHOW_WITH_US"]) ? $context["STYLE_MP_SHOW_WITH_US"] : null) && $this->getAttribute($context["postrow"], "POSTER_WITH_US", array()))) {
                echo "<dd class=\"profile-with_us\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("USER_WITH_US");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_WITH_US", array());
                echo "</dd>";
            }
            // line 175
            echo "
\t\t";
            // line 176
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                // line 177
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 178
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                echo "</dd>
\t\t";
            }
            // line 180
            echo "
\t\t";
            // line 181
            // line 182
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 183
                echo "\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 184
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
                // line 186
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "\t\t";
            // line 188
            echo "
\t\t";
            // line 189
            // line 190
            echo "\t\t";
            if ((((isset($context["STYLE_MP_SHOW_BUTTONS"]) ? $context["STYLE_MP_SHOW_BUTTONS"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                // line 191
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t";
                // line 192
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 193
                    echo "\t\t\t\t\t\t<a class=\"button contact-button\" href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "\"";
                    if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 194
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
                // line 197
                echo "\t\t\t</dd>
\t\t";
            }
            // line 199
            echo "\t\t";
            // line 200
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 204
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                // line 205
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                    // line 206
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 207
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 208
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute(                // line 210
$context["postrow"], "S_IGNORE_POST", array())) {
                    // line 211
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 212
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 213
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 216
                echo "\t\t\t";
            }
            // line 217
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 219
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" class=\"post_icon\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"\" />";
            }
            // line 220
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "POST_SUBJECT", array()) && ($this->getAttribute($context["postrow"], "POST_SUBJECT", array()) != (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null)))) {
                echo "<h3><a href=\"#p";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">";
                echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
                echo "</a></h3>";
            }
            // line 221
            echo "
\t\t";
            // line 222
            $value = (((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array())) || $this->getAttribute($context["postrow"], "POST_RATING_SHOW", array()));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 223
            echo "\t\t";
            // line 224
            echo "\t\t";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 225
                echo "\t\t\t";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_POST_BUTTONS", array())) {
                    // line 226
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 227
                    // line 228
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        // line 229
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 230
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "\" class=\"button icon-button info-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 233
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        // line 234
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 235
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "\" class=\"button icon-button warn-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 238
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        // line 239
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"nofollow\" href=\"";
                        // line 240
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "\" class=\"button icon-button report-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 243
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                        // line 244
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 245
                        echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "\" class=\"button icon-button delete-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 248
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                        // line 249
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 250
                        echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                        echo "\" class=\"button icon-button edit-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("BUTTON_EDIT");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 253
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        // line 254
                        echo "\t\t\t\t\t\t<li";
                        if ((((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null) || $this->getAttribute($context["postrow"], "DECODED_MESSAGE", array())) &&  !(isset($context["S_QUICK_FULL_QUOTE"]) ? $context["S_QUICK_FULL_QUOTE"] : null))) {
                            echo " style=\"display: none;\"";
                        }
                        echo ">
\t\t\t\t\t\t\t<a rel=\"nofollow\" class=\"button icon-button quote-icon";
                        // line 255
                        if (( !(isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null) || $this->getAttribute($context["postrow"], "DECODED_MESSAGE", array()))) {
                            echo "\"";
                        } else {
                            echo " no-full-quote\"";
                        }
                        if ( !(isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null)) {
                            echo " href=\"";
                            echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                            echo "\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                            echo "</span>";
                        } else {
                            echo " href=\"#postform\" onclick=\"addquote(";
                            echo $this->getAttribute($context["postrow"], "POST_ID", array());
                            echo ",'";
                            echo $this->getAttribute($context["postrow"], "POSTER_QUOTE", array());
                            echo "'); return false;\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("QUOTE_TEXT");
                            echo "\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("QUOTE");
                            echo "</span>";
                        }
                        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 258
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "POST_RATING_SHOW", array())) {
                        // line 259
                        echo "\t\t\t\t\t\t<li class=\"rate-box\">
\t\t\t\t\t\t\t<span class=\"button icon-button left-button rate-";
                        // line 260
                        if (($this->getAttribute($context["postrow"], "USER_RATE", array()) < 0)) {
                            echo "minus-voted";
                        } elseif ($this->getAttribute($context["postrow"], "USER_CAN_MINUS", array())) {
                            echo "minus";
                        } else {
                            echo "no-minus";
                        }
                        echo "\"></span><span class=\"button icon-button center-button rate-value rate-";
                        if (($this->getAttribute($context["postrow"], "POST_RATING", array()) > 0)) {
                            echo "positive";
                        } elseif (($this->getAttribute($context["postrow"], "POST_RATING", array()) < 0)) {
                            echo "negative";
                        } else {
                            echo "zero";
                        }
                        echo "\"";
                        if ((twig_length_filter($this->env, $this->getAttribute($context["postrow"], "postrater", array())) || (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null)) &&  !(isset($context["DISPLAY_RATERS"]) ? $context["DISPLAY_RATERS"] : null)))) {
                            echo " title=\"";
                            if ((( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null)) &&  !(isset($context["DISPLAY_RATERS"]) ? $context["DISPLAY_RATERS"] : null))) {
                                echo "+";
                                echo $this->getAttribute($context["postrow"], "POST_RATING_POSITIVE", array());
                                echo "/−";
                                echo $this->getAttribute($context["postrow"], "POST_RATING_NEGATIVE", array());
                            }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "postrater", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["postrater"]) {
                                if ( !$this->getAttribute($context["postrater"], "S_FIRST_ROW", array())) {
                                    echo "&#13;";
                                }
                                echo $this->getAttribute($context["postrater"], "DATE", array());
                                echo " ";
                                echo $this->getAttribute($context["postrater"], "RATE_TEXT", array());
                                echo " ";
                                echo $this->getAttribute($context["postrater"], "RATER_NAME", array());
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrater'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo "\"";
                        }
                        echo ">";
                        if ((($this->getAttribute($context["postrow"], "POST_RATING_NEGATIVE", array()) != 0) || ($this->getAttribute($context["postrow"], "POST_RATING_POSITIVE", array()) != 0))) {
                            echo $this->getAttribute($context["postrow"], "POST_RATING", array());
                        } else {
                            echo "−";
                        }
                        echo "</span><span class=\"button icon-button right-button rate-";
                        if (($this->getAttribute($context["postrow"], "USER_RATE", array()) > 0)) {
                            echo "plus-voted";
                        } elseif ($this->getAttribute($context["postrow"], "USER_CAN_PLUS", array())) {
                            echo "plus";
                        } else {
                            echo "no-plus";
                        }
                        echo "\"></span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 263
                    echo "\t\t\t\t\t";
                    // line 264
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 266
                echo "\t\t";
            }
            // line 267
            echo "\t\t";
            // line 268
            echo "
\t\t\t";
            // line 269
            // line 270
            echo "\t\t\t<p class=\"author\">";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a rel=\"nofollow\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                echo "\">";
            }
            if ((isset($context["STYLE_VT_SHOW_POST_NUMBERS"]) ? $context["STYLE_VT_SHOW_POST_NUMBERS"] : null)) {
                echo "#";
                echo $this->getAttribute($context["postrow"], "POST_NUMBER", array());
            } else {
                echo $this->getAttribute($context["postrow"], "MINI_POST_IMG", array());
            }
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "</a>";
            }
            echo "<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a rel=\"nofollow\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                echo "\"";
            } else {
                echo "<span";
            }
            if ((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null)) {
                echo " onclick=\"insert_text('[b]";
                echo $this->getAttribute($context["postrow"], "POSTER_QUOTE", array());
                echo "[/b], '); return false;\"";
            }
            echo " style=\"font-weight: bold;";
            if ($this->getAttribute($context["postrow"], "POST_AUTHOR_COLOUR", array())) {
                echo " color: ";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_COLOUR", array());
                echo ";";
            }
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR", array());
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "</a>";
            } else {
                echo "</span>";
            }
            echo " &raquo; </span>";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo " </p>
\t\t\t";
            // line 271
            // line 272
            echo "
\t\t\t";
            // line 273
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 274
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<strong>";
                // line 276
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 277
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 278
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 279
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 280
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute(            // line 283
$context["postrow"], "S_POST_DELETED", array())) {
                // line 284
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 286
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 287
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 288
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 289
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 290
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 294
            echo "
\t\t\t";
            // line 295
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 296
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 297
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 300
            echo "
\t\t\t<div class=\"content\">";
            // line 301
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>
\t\t\t";
            // line 302
            if (((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null) && $this->getAttribute($context["postrow"], "DECODED_MESSAGE", array()))) {
                // line 303
                echo "\t\t\t\t<div id=\"message_";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" style=\"display: none;\">";
                echo $this->getAttribute($context["postrow"], "DECODED_MESSAGE", array());
                echo "</div>
\t\t\t";
            }
            // line 305
            echo "
\t\t\t";
            // line 306
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 307
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 309
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 311
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 312
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 314
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 316
            echo "
\t\t\t";
            // line 317
            // line 318
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 319
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "DELETE_REASON", array()))) {
                // line 320
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 321
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 322
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 323
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute(            // line 324
$context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array()))) {
                // line 325
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 326
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 327
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 328
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 330
            echo "
\t\t\t";
            // line 331
            // line 332
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                echo "<div id=\"sig";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>";
            }
            // line 333
            echo "
\t\t\t";
            // line 334
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "postwarning", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["postwarning"]) {
                // line 335
                echo "\t\t\t\t<div class=\"";
                echo $this->getAttribute($context["postwarning"], "TYPE", array());
                echo "\">
\t\t\t\t\t<span class=\"date\">";
                // line 336
                echo $this->getAttribute($context["postwarning"], "ISSUER_NAME", array());
                echo " » ";
                echo $this->getAttribute($context["postwarning"], "TIME", array());
                echo "</span>
\t\t\t\t\t<strong>";
                // line 337
                echo $this->getAttribute($context["postwarning"], "TITLE", array());
                echo "</strong><br />
\t\t\t\t\t";
                // line 338
                echo $this->getAttribute($context["postwarning"], "TEXT", array());
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postwarning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "
\t\t\t";
            // line 342
            // line 343
            echo "\t\t\t</div>

\t\t</div>

\t\t</div>
\t</div>

\t<hr class=\"divider\" />
\t";
            // line 351
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                $value = "bg2";
                $context['definition']->set('NEXT_BG', $value);
            } else {
                $value = "bg1";
                $context['definition']->set('NEXT_BG', $value);
            }
            // line 352
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "
";
        // line 355
        if ((isset($context["BUMPED_MESSAGE"]) ? $context["BUMPED_MESSAGE"] : null)) {
            // line 356
            echo "\t<div class=\"post ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NEXT_BG", array());
            echo "\">
\t\t<div class=\"inner\">
\t\t\t";
            // line 358
            echo (isset($context["BUMPED_MESSAGE"]) ? $context["BUMPED_MESSAGE"] : null);
            echo "
\t\t</div>
\t</div>
\t<hr class=\"divider\" />
";
        }
        // line 363
        echo "
";
        // line 364
        if ((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())))) {
            // line 365
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo (isset($context["S_TOPIC_ACTION"]) ? $context["S_TOPIC_ACTION"] : null);
            echo "\">
\t<fieldset class=\"display-options\">
\t\t";
            // line 367
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 368
                echo "\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label>
\t\t<label>";
                // line 369
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label> <label>";
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 370
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 372
            echo "\t</fieldset>
\t</form>
\t<hr />
";
        }
        // line 376
        echo "
";
        // line 377
        // line 378
        echo "<div class=\"action-bar bottom\">
\t<div class=\"buttons\">
\t\t";
        // line 380
        // line 381
        echo "
\t";
        // line 382
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 383
            echo "\t\t<a rel=\"nofollow\" href=\"";
            echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
            echo "\" class=\"button icon-button ";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 384
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            // line 385
            echo "\t\t</a>
\t";
        }
        // line 387
        echo "
\t\t";
        // line 388
        // line 389
        echo "\t</div>

\t";
        // line 391
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 391)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 392
        echo "
\t";
        // line 393
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()))) {
            // line 394
            echo "\t\t<div class=\"dropdown-container dropdown-container-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " dropdown-up dropdown-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t\t<span title=\"";
            // line 395
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "\" class=\"dropdown-trigger button icon-button modtools-icon dropdown-select\">";
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 398
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 399
                echo "\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 400
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", array());
                echo "\"";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 402
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 406
        echo "\t
\t";
        // line 407
        // line 408
        echo "
\t";
        // line 409
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 410
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 411
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo "
\t\t\t";
            // line 412
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 413
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 413)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 414
                echo "\t\t\t";
            } else {
                // line 415
                echo "\t\t\t\t&bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 417
            echo "\t\t</div>
\t";
        }
        // line 419
        echo "</div>

";
        // line 421
        if ((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null)) {
            // line 422
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 422)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 424
        echo "
";
        // line 425
        // line 426
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 426)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 427
        echo "
";
        // line 428
        if (((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null) && (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null))) {
            // line 429
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 430
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<a rel=\"nofollow\" href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
            }
            echo " <span class=\"extra\">(";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")</span></h3>
\t\t<p>";
            // line 431
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "</p>
\t</div>
";
        }
        // line 434
        echo "
";
        // line 435
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 435)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1876 => 435,  1873 => 434,  1867 => 431,  1853 => 430,  1850 => 429,  1848 => 428,  1845 => 427,  1833 => 426,  1832 => 425,  1829 => 424,  1815 => 422,  1813 => 421,  1809 => 419,  1805 => 417,  1799 => 415,  1796 => 414,  1783 => 413,  1781 => 412,  1777 => 411,  1774 => 410,  1772 => 409,  1769 => 408,  1768 => 407,  1765 => 406,  1759 => 402,  1744 => 400,  1740 => 399,  1736 => 398,  1728 => 395,  1721 => 394,  1719 => 393,  1716 => 392,  1704 => 391,  1700 => 389,  1699 => 388,  1696 => 387,  1692 => 385,  1686 => 384,  1669 => 383,  1667 => 382,  1664 => 381,  1663 => 380,  1659 => 378,  1658 => 377,  1655 => 376,  1649 => 372,  1644 => 370,  1636 => 369,  1628 => 368,  1626 => 367,  1620 => 365,  1618 => 364,  1615 => 363,  1607 => 358,  1601 => 356,  1599 => 355,  1596 => 354,  1590 => 352,  1582 => 351,  1572 => 343,  1571 => 342,  1568 => 341,  1559 => 338,  1555 => 337,  1549 => 336,  1544 => 335,  1540 => 334,  1537 => 333,  1528 => 332,  1527 => 331,  1524 => 330,  1520 => 328,  1511 => 327,  1507 => 326,  1504 => 325,  1502 => 324,  1499 => 323,  1490 => 322,  1486 => 321,  1483 => 320,  1480 => 319,  1473 => 318,  1472 => 317,  1469 => 316,  1465 => 314,  1456 => 312,  1452 => 311,  1447 => 309,  1443 => 307,  1441 => 306,  1438 => 305,  1430 => 303,  1428 => 302,  1424 => 301,  1421 => 300,  1413 => 297,  1410 => 296,  1408 => 295,  1405 => 294,  1398 => 290,  1394 => 289,  1390 => 288,  1386 => 287,  1382 => 286,  1376 => 284,  1374 => 283,  1368 => 280,  1364 => 279,  1360 => 278,  1356 => 277,  1352 => 276,  1346 => 274,  1344 => 273,  1341 => 272,  1340 => 271,  1292 => 270,  1291 => 269,  1288 => 268,  1286 => 267,  1283 => 266,  1279 => 264,  1277 => 263,  1217 => 260,  1214 => 259,  1211 => 258,  1182 => 255,  1175 => 254,  1172 => 253,  1162 => 250,  1159 => 249,  1156 => 248,  1146 => 245,  1143 => 244,  1140 => 243,  1130 => 240,  1127 => 239,  1124 => 238,  1114 => 235,  1111 => 234,  1108 => 233,  1098 => 230,  1095 => 229,  1092 => 228,  1091 => 227,  1088 => 226,  1085 => 225,  1082 => 224,  1080 => 223,  1077 => 222,  1074 => 221,  1065 => 220,  1054 => 219,  1044 => 217,  1041 => 216,  1035 => 213,  1031 => 212,  1026 => 211,  1024 => 210,  1019 => 208,  1015 => 207,  1010 => 206,  1007 => 205,  1005 => 204,  999 => 200,  997 => 199,  993 => 197,  982 => 194,  967 => 193,  963 => 192,  960 => 191,  957 => 190,  956 => 189,  953 => 188,  951 => 187,  945 => 186,  934 => 184,  931 => 183,  926 => 182,  925 => 181,  922 => 180,  914 => 178,  911 => 177,  909 => 176,  906 => 175,  896 => 174,  886 => 173,  868 => 172,  834 => 171,  800 => 170,  790 => 169,  786 => 167,  780 => 166,  774 => 165,  765 => 164,  761 => 162,  755 => 160,  752 => 159,  748 => 158,  745 => 157,  742 => 156,  740 => 155,  733 => 154,  731 => 153,  717 => 152,  714 => 151,  712 => 150,  688 => 149,  687 => 148,  679 => 147,  676 => 146,  674 => 145,  671 => 144,  658 => 143,  655 => 142,  654 => 141,  645 => 140,  638 => 139,  624 => 138,  621 => 137,  619 => 136,  595 => 135,  594 => 134,  586 => 133,  578 => 132,  547 => 129,  537 => 127,  534 => 126,  525 => 125,  520 => 124,  518 => 123,  514 => 122,  511 => 121,  510 => 120,  507 => 119,  499 => 114,  495 => 113,  488 => 109,  485 => 108,  477 => 105,  473 => 103,  471 => 102,  468 => 101,  457 => 97,  449 => 96,  444 => 93,  442 => 92,  433 => 89,  426 => 87,  423 => 86,  417 => 85,  416 => 84,  403 => 82,  400 => 81,  394 => 80,  376 => 79,  369 => 78,  343 => 77,  331 => 76,  313 => 75,  311 => 74,  307 => 73,  293 => 70,  289 => 69,  279 => 63,  277 => 62,  274 => 61,  273 => 60,  269 => 58,  267 => 57,  263 => 55,  257 => 53,  254 => 52,  241 => 51,  239 => 50,  228 => 49,  225 => 48,  223 => 47,  220 => 46,  212 => 41,  204 => 40,  198 => 39,  194 => 38,  189 => 36,  186 => 35,  184 => 34,  181 => 33,  179 => 32,  167 => 31,  163 => 29,  162 => 28,  159 => 27,  155 => 25,  149 => 24,  132 => 23,  130 => 22,  127 => 21,  126 => 20,  120 => 16,  116 => 14,  103 => 13,  86 => 12,  78 => 11,  75 => 10,  73 => 9,  70 => 8,  58 => 7,  49 => 5,  46 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}

<?php

/* search_results.html */
class __TwigTemplate_0ea40152cf8af11cc89113f756b3e0cf113ff4bf13c11e3161e880ebdc01ba89 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"searchresults-title\">";
        // line 5
        if ((isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null)) {
            echo (isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null);
        } else {
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        }
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <a href=\"";
            echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
            echo "\">";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 6
        if ((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null);
            echo "</strong></p>";
        }
        // line 7
        if ((isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null);
            echo "</strong></p>";
        }
        // line 8
        if ((isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null)) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 9
        echo "
";
        // line 10
        // line 11
        echo "
";
        // line 12
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 13
            echo "\t<div class=\"action-bar top\">

\t";
            // line 15
            if (((isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null) > 0)) {
                // line 16
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 17
                echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 21
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 26
            echo "
\t\t";
            // line 27
            // line 28
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 30
            if (((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null) && (isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null))) {
                echo "<a rel=\"nofollow\" data-ajax=\"mark_forums_read\" href=\"";
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" accesskey=\"m\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
                echo "</a> &bull; ";
            }
            // line 31
            echo "\t\t\t";
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t";
            // line 32
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 33
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 33)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 34
                echo "\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 37
            echo "\t\t</div>
\t</div>
";
        }
        // line 40
        echo "
";
        // line 41
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 42
            echo "
\t";
            // line 43
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) {
                // line 44
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 50
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 53
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 59
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 60
                    echo "\t\t\t";
                    // line 61
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 62
                    echo $this->getAttribute($context["searchresults"], "TOPIC_IMG_STYLE", array());
                    echo "\">
\t\t\t\t\t<dt ";
                    // line 63
                    if ($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array())) {
                        echo "style=\"background-image: url(";
                        echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array());
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 64
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a rel=\"nofollow\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 65
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 67
                    // line 68
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a rel=\"nofollow\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\">";
                        echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                        echo "</a> ";
                    }
                    // line 69
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 70
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "UNAPPROVED_IMG", array());
                        echo "</a> ";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\">";
                        echo (isset($context["DELETED_IMG"]) ? $context["DELETED_IMG"] : null);
                        echo "</a> ";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\">";
                        echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                        echo "</a>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 73
                    if (twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "pagination", array()))) {
                        // line 74
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 76
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                // line 78
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                echo "<li class=\"active\"><span>";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 79
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 80
$context["pagination"], "S_IS_NEXT", array())) {
                                // line 81
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 83
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 84
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        echo (isset($context["POLL_IMG"]) ? $context["POLL_IMG"] : null);
                        echo " ";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", array());
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 89
                    // line 90
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 93
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 94
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 96
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t\t\t\t";
                    // line 97
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        echo "<a rel=\"nofollow\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                        echo "</a> ";
                    }
                    echo "<br />";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                    echo "<br /> </span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 101
                    // line 102
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 108
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 110
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 114
            echo "
";
        } else {
            // line 116
            echo "
\t";
            // line 117
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 118
                echo "\t\t";
                // line 119
                echo "\t\t<div class=\"search post ";
                if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 122
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 123
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 124
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t</div>
\t";
                } else {
                    // line 127
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 128
                    // line 129
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 130
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "</dd>
\t\t\t<dd>";
                    // line 131
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 132
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 133
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 134
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</strong></dd>
\t\t\t";
                    // line 135
                    // line 136
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
                    // line 139
                    if ($this->getAttribute($context["searchresults"], "POST_RATING_SHOW", array())) {
                        echo "<ul class=\"post-buttons\"><li class=\"rate-box\"><span class=\"button icon-button left-button rate-no-minus\"></span><span class=\"button icon-button center-button rate-value rate-";
                        if (($this->getAttribute($context["searchresults"], "POST_RATING", array()) > 0)) {
                            echo "positive";
                        } elseif (($this->getAttribute($context["searchresults"], "POST_RATING", array()) < 0)) {
                            echo "negative";
                        } else {
                            echo "zero";
                        }
                        echo "\"";
                        if ((twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "postrater", array())) || (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null)) &&  !(isset($context["DISPLAY_RATERS"]) ? $context["DISPLAY_RATERS"] : null)))) {
                            echo " title=\"";
                            if ((( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null)) &&  !(isset($context["DISPLAY_RATERS"]) ? $context["DISPLAY_RATERS"] : null))) {
                                echo "+";
                                echo $this->getAttribute($context["searchresults"], "POST_RATING_POSITIVE", array());
                                echo "/−";
                                echo $this->getAttribute($context["searchresults"], "POST_RATING_NEGATIVE", array());
                            }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "postrater", array()));
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
                        if ((($this->getAttribute($context["searchresults"], "POST_RATING_NEGATIVE", array()) != 0) || ($this->getAttribute($context["searchresults"], "POST_RATING_POSITIVE", array()) != 0))) {
                            echo $this->getAttribute($context["searchresults"], "POST_RATING", array());
                        } else {
                            echo "−";
                        }
                        echo "</span><span class=\"button icon-button right-button rate-no-plus\"></span></li></ul>";
                    }
                    // line 140
                    echo "\t\t\t<h3><a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 141
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</div>
\t\t</div>
\t";
                }
                // line 144
                echo "
\t";
                // line 145
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 146
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li ><a href=\"";
                    // line 147
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\" class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></li>
\t\t</ul>
\t";
                }
                // line 150
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 153
                // line 154
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 155
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 157
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 162
        echo "
";
        // line 163
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) || (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null))) {
            // line 164
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">

\t<fieldset class=\"display-options\">
\t\t";
            // line 167
            if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null))) {
                // line 168
                echo "\t\t\t<label>";
                if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label><label>";
                }
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                if ((isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) {
                    echo "</label> <label>";
                    echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                    echo "</label>
\t\t\t<label>";
                    // line 169
                    echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                }
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 170
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 172
            echo "\t</fieldset>

\t</form>

\t<hr />
";
        }
        // line 178
        echo "
";
        // line 179
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 180
            echo "<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
            // line 182
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t";
            // line 183
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 184
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 184)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 185
                echo "\t\t";
            } else {
                // line 186
                echo "\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t";
            }
            // line 188
            echo "\t</div>
</div>
";
        }
        // line 191
        echo "
";
        // line 192
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 192)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 193
        echo "
";
        // line 194
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 194)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  730 => 194,  727 => 193,  715 => 192,  712 => 191,  707 => 188,  701 => 186,  698 => 185,  685 => 184,  683 => 183,  679 => 182,  675 => 180,  673 => 179,  670 => 178,  662 => 172,  657 => 170,  652 => 169,  637 => 168,  635 => 167,  628 => 164,  626 => 163,  623 => 162,  612 => 157,  608 => 155,  603 => 154,  602 => 153,  597 => 150,  587 => 147,  584 => 146,  582 => 145,  579 => 144,  573 => 141,  566 => 140,  522 => 139,  517 => 136,  516 => 135,  509 => 134,  502 => 133,  493 => 132,  484 => 131,  480 => 130,  473 => 129,  472 => 128,  469 => 127,  463 => 124,  460 => 123,  458 => 122,  444 => 119,  442 => 118,  437 => 117,  434 => 116,  430 => 114,  423 => 110,  419 => 108,  412 => 103,  406 => 102,  405 => 101,  388 => 97,  382 => 96,  377 => 94,  373 => 93,  368 => 90,  367 => 89,  352 => 88,  346 => 87,  341 => 84,  335 => 83,  325 => 81,  323 => 80,  317 => 79,  310 => 78,  307 => 77,  303 => 76,  299 => 74,  297 => 73,  286 => 72,  277 => 71,  269 => 70,  262 => 69,  253 => 68,  252 => 67,  248 => 65,  242 => 64,  231 => 63,  227 => 62,  218 => 61,  216 => 60,  212 => 59,  203 => 53,  199 => 52,  195 => 51,  191 => 50,  183 => 44,  181 => 43,  178 => 42,  176 => 41,  173 => 40,  168 => 37,  162 => 35,  159 => 34,  146 => 33,  144 => 32,  139 => 31,  131 => 30,  127 => 28,  126 => 27,  123 => 26,  111 => 21,  105 => 20,  101 => 19,  96 => 17,  93 => 16,  91 => 15,  87 => 13,  85 => 12,  82 => 11,  81 => 10,  78 => 9,  72 => 8,  63 => 7,  54 => 6,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}

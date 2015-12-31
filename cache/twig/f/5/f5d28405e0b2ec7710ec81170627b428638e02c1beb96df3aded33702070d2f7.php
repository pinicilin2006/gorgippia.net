<?php

/* index_body.html */
class __TwigTemplate_f5d28405e0b2ec7710ec81170627b428638e02c1beb96df3aded33702070d2f7 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo "<p class=\"responsive-center time rightside\">";
            echo (isset($context["LAST_VISIT_DATE"]) ? $context["LAST_VISIT_DATE"] : null);
            echo "</p>";
        }
        // line 4
        echo "<p class=\"responsive-center time\">";
        echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
        echo "</p>

";
        // line 6
        if (((isset($context["S_ANNOUNCE_INDEX"]) ? $context["S_ANNOUNCE_INDEX"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "announcetopic", array())))) {
            // line 7
            echo "<div class=\"forumbg announcement\">
\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
            echo "</dt>
\t\t\t\t\t<dd class=\"posts\">";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "announcetopic", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["announcetopic"]) {
                // line 21
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["announcetopic"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo " global-announce";
                if ($this->getAttribute($context["announcetopic"], "S_TOPIC_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t<dl class=\"icon ";
                // line 22
                echo $this->getAttribute($context["announcetopic"], "TOPIC_IMG_STYLE", array());
                echo "\">
\t\t\t\t<dt";
                // line 23
                if ($this->getAttribute($context["announcetopic"], "TOPIC_ICON_IMG", array())) {
                    echo " style=\"background-image: url(";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["announcetopic"], "TOPIC_ICON_IMG", array());
                    echo ");\"";
                }
                echo " title=\"";
                echo $this->getAttribute($context["announcetopic"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 24
                if (($this->getAttribute($context["announcetopic"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                    echo "<a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_NEWEST_POST", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 25
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 26
                // line 27
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["announcetopic"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                    echo "<a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_NEWEST_POST", array());
                    echo "\">";
                    echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                    echo "</a> ";
                }
                echo "<a href=\"";
                echo $this->getAttribute($context["announcetopic"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["announcetopic"], "TOPIC_TITLE", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 28
                if (($this->getAttribute($context["announcetopic"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["announcetopic"], "S_POSTS_UNAPPROVED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo $this->getAttribute($context["announcetopic"], "UNAPPROVED_IMG", array());
                    echo "</a> ";
                }
                // line 29
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["announcetopic"], "S_TOPIC_DELETED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo (isset($context["DELETED_IMG"]) ? $context["DELETED_IMG"] : null);
                    echo "</a> ";
                }
                // line 30
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["announcetopic"], "S_TOPIC_REPORTED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_MCP_REPORT", array());
                    echo "\">";
                    echo $this->getAttribute($context["announcetopic"], "REPORTED_IMG", array());
                    echo "</a>";
                }
                echo "<br />

\t\t\t\t\t\t";
                // line 32
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    // line 33
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\">
\t\t\t\t\t\t\t";
                    // line 34
                    echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["announcetopic"], "LAST_POST_AUTHOR_FULL", array());
                    echo " &laquo; <a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_LAST_POST", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                    echo "\">";
                    echo $this->getAttribute($context["announcetopic"], "LAST_POST_TIME", array());
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 35
                    if (($this->getAttribute($context["announcetopic"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["announcetopic"], "FORUM_ID", array())))) {
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("IN");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["announcetopic"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["announcetopic"], "FORUM_NAME", array());
                        echo "</a>";
                    }
                    // line 36
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 37
                    if ($this->getAttribute($context["announcetopic"], "REPLIES", array())) {
                        echo "<span class=\"responsive-show left-box\">";
                        echo $this->env->getExtension('phpbb')->lang("REPLIES");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["announcetopic"], "REPLIES", array());
                        echo "</strong></span>";
                    }
                    // line 38
                    echo "\t\t\t\t\t\t";
                }
                // line 39
                echo "
\t\t\t\t\t\t";
                // line 40
                if (twig_length_filter($this->env, $this->getAttribute($context["announcetopic"], "pagination", array()))) {
                    // line 41
                    echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 43
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["announcetopic"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 45
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 46
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 47
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 49
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 53
                echo "
\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                // line 55
                if ($this->getAttribute($context["announcetopic"], "S_HAS_POLL", array())) {
                    echo (isset($context["POLL_IMG"]) ? $context["POLL_IMG"] : null);
                    echo " ";
                }
                // line 56
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["announcetopic"], "TOPIC_AUTHOR_FULL", array());
                echo " &raquo; ";
                echo $this->getAttribute($context["announcetopic"], "FIRST_POST_TIME", array());
                echo "
\t\t\t\t\t\t\t";
                // line 57
                if (($this->getAttribute($context["announcetopic"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["announcetopic"], "FORUM_ID", array())))) {
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["announcetopic"], "FORUM_NAME", array());
                    echo "</a>
\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 58
$context["announcetopic"], "U_VIEW_FORUM", array()) && $this->getAttribute($context["announcetopic"], "FORUM_NAME", array()))) {
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["announcetopic"], "parent_forums", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["parent_forums"]) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["parent_forums"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["parent_forums"], "FORUM_NAME", array());
                        echo "</a> &raquo; ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_forums'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<a href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["announcetopic"], "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 59
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
                // line 61
                // line 62
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
                // line 64
                echo $this->getAttribute($context["announcetopic"], "REPLIES", array());
                echo " <dfn>";
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
                // line 65
                echo $this->getAttribute($context["announcetopic"], "VIEWS", array());
                echo " <dfn>";
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                // line 66
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " </dfn>";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["announcetopic"], "LAST_POST_AUTHOR_FULL", array());
                echo "
\t\t\t\t\t";
                // line 67
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    echo "<a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["announcetopic"], "U_LAST_POST", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                    echo "\">";
                    echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                    echo "</a> ";
                }
                echo "<br />";
                echo $this->getAttribute($context["announcetopic"], "LAST_POST_TIME", array());
                echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcetopic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t</ul>
\t</div>
</div>
";
        }
        // line 76
        echo "
";
        // line 77
        if (((isset($context["S_ACTIVE_TOPICS_ON_INDEX"]) ? $context["S_ACTIVE_TOPICS_ON_INDEX"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "activetopic", array())))) {
            // line 78
            echo "<div class=\"forumbg\">
\t<div class=\"inner\">
\t<ul class=\"topiclist\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"icon\">
\t\t\t\t<dt id=\"active_topics\">";
            // line 83
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
                echo "</a>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            }
            echo "</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</dd>
\t\t\t\t<dd class=\"views\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo "</dd>
\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</span></dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist topics\">
";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "activetopic", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["activetopic"]) {
                // line 92
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["activetopic"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                if ($this->getAttribute($context["activetopic"], "S_POST_ANNOUNCE", array())) {
                    echo " announce";
                }
                if ($this->getAttribute($context["activetopic"], "S_POST_STICKY", array())) {
                    echo " sticky";
                }
                if ($this->getAttribute($context["activetopic"], "S_TOPIC_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t<dl class=\"icon ";
                // line 93
                echo $this->getAttribute($context["activetopic"], "TOPIC_IMG_STYLE", array());
                echo "\">
\t\t\t\t<dt";
                // line 94
                if ($this->getAttribute($context["activetopic"], "TOPIC_ICON_IMG", array())) {
                    echo " style=\"background-image: url(";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["activetopic"], "TOPIC_ICON_IMG", array());
                    echo ");\"";
                }
                echo " title=\"";
                echo $this->getAttribute($context["activetopic"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 95
                if (($this->getAttribute($context["activetopic"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                    echo "<a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["activetopic"], "U_NEWEST_POST", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 96
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 97
                // line 98
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["activetopic"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                    echo "<a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["activetopic"], "U_NEWEST_POST", array());
                    echo "\">";
                    echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                    echo "</a> ";
                }
                echo "<a href=\"";
                echo $this->getAttribute($context["activetopic"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["activetopic"], "TOPIC_TITLE", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 99
                if (($this->getAttribute($context["activetopic"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["activetopic"], "S_POSTS_UNAPPROVED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["activetopic"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo $this->getAttribute($context["activetopic"], "UNAPPROVED_IMG", array());
                    echo "</a> ";
                }
                // line 100
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["activetopic"], "S_TOPIC_DELETED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["activetopic"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo (isset($context["DELETED_IMG"]) ? $context["DELETED_IMG"] : null);
                    echo "</a> ";
                }
                // line 101
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["activetopic"], "S_TOPIC_REPORTED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["activetopic"], "U_MCP_REPORT", array());
                    echo "\">";
                    echo $this->getAttribute($context["activetopic"], "REPORTED_IMG", array());
                    echo "</a>";
                }
                echo "<br />

\t\t\t\t\t\t";
                // line 103
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    // line 104
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\">
\t\t\t\t\t\t\t";
                    // line 105
                    echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["activetopic"], "LAST_POST_AUTHOR_FULL", array());
                    echo " &laquo; <a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["activetopic"], "U_LAST_POST", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                    echo "\">";
                    echo $this->getAttribute($context["activetopic"], "LAST_POST_TIME", array());
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 106
                    if (($this->getAttribute($context["activetopic"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["activetopic"], "FORUM_ID", array())))) {
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("IN");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["activetopic"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["activetopic"], "FORUM_NAME", array());
                        echo "</a>";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 108
                    if ($this->getAttribute($context["activetopic"], "REPLIES", array())) {
                        echo "<span class=\"responsive-show left-box\">";
                        echo $this->env->getExtension('phpbb')->lang("REPLIES");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["activetopic"], "REPLIES", array());
                        echo "</strong></span>";
                    }
                    // line 109
                    echo "\t\t\t\t\t\t";
                }
                // line 110
                echo "
\t\t\t\t\t\t";
                // line 111
                if (twig_length_filter($this->env, $this->getAttribute($context["activetopic"], "pagination", array()))) {
                    // line 112
                    echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 114
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["activetopic"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 115
                        echo "\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 116
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 117
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 118
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 120
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 124
                echo "
\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                // line 126
                if ($this->getAttribute($context["activetopic"], "S_HAS_POLL", array())) {
                    echo (isset($context["POLL_IMG"]) ? $context["POLL_IMG"] : null);
                    echo " ";
                }
                // line 127
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["activetopic"], "TOPIC_AUTHOR_FULL", array());
                echo " &raquo; ";
                echo $this->getAttribute($context["activetopic"], "FIRST_POST_TIME", array());
                echo "
\t\t\t\t\t\t\t";
                // line 128
                if ( !$this->getAttribute($context["activetopic"], "S_TOPIC_GLOBAL", array())) {
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["activetopic"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["activetopic"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo " (";
                    echo $this->env->getExtension('phpbb')->lang("GLOBAL");
                    echo ")";
                }
                // line 129
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
                // line 131
                // line 132
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
                // line 134
                echo $this->getAttribute($context["activetopic"], "REPLIES", array());
                echo " <dfn>";
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
                // line 135
                echo $this->getAttribute($context["activetopic"], "VIEWS", array());
                echo " <dfn>";
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                // line 136
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " </dfn>";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["activetopic"], "LAST_POST_AUTHOR_FULL", array());
                echo "
\t\t\t\t\t";
                // line 137
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    echo "<a rel=\"nofollow\" href=\"";
                    echo $this->getAttribute($context["activetopic"], "U_LAST_POST", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                    echo "\">";
                    echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                    echo "</a> ";
                }
                echo "<br />";
                echo $this->getAttribute($context["activetopic"], "LAST_POST_TIME", array());
                echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activetopic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t</ul>
\t</div>
</div>
";
        }
        // line 146
        echo "
";
        // line 147
        if (((isset($context["S_ACTIVE_TOPICS_ON_INDEX"]) ? $context["S_ACTIVE_TOPICS_ON_INDEX"] : null) || (isset($context["S_ANNOUNCE_INDEX"]) ? $context["S_ANNOUNCE_INDEX"] : null))) {
            // line 148
            echo "<div style=\"height: 0.8em\"></div>
";
        }
        // line 150
        echo "
";
        // line 151
        // line 152
        if ((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null)) {
            // line 153
            echo "\t<div class=\"action-bar compact\">
\t\t<a rel=\"nofollow\" href=\"";
            // line 154
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 157
        // line 158
        echo "
";
        // line 159
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 159)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 160
        echo "
";
        // line 161
        // line 162
        echo "
";
        // line 163
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 164
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\" class=\"headerspace\">
\t<h3><a rel=\"nofollow\" href=\"";
            // line 165
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                echo "&nbsp; &bull; &nbsp;<a rel=\"nofollow\" href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 167
            echo $this->env->getExtension('phpbb')->lang("LOGIN_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_NAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 168
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 169
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                // line 170
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 172
            echo "\t\t\t";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 173
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" checked=\"checked\" /></label>
\t\t\t";
            }
            // line 175
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 176
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 180
        echo "
";
        // line 181
        // line 182
        echo "
";
        // line 183
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 184
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 185
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
\t\t<p>
\t\t\t";
            // line 187
            // line 188
            echo "\t\t\t";
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo "<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            if ((isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null)) {
                echo "<br />";
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            }
            // line 189
            echo "\t\t\t";
            if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                echo "<br /><em>";
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                echo "</em>";
            }
            // line 190
            echo "\t\t\t";
            // line 191
            echo "\t\t</p>
\t</div>
";
        }
        // line 194
        echo "
";
        // line 195
        if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
            // line 196
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 197
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 199
            // line 200
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 201
            echo "\t\t\t";
            // line 202
            echo "\t\t</p>
\t</div>
";
        }
        // line 205
        echo "
";
        // line 206
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 207
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 208
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 210
            // line 211
            echo "\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t";
            // line 212
            // line 213
            echo "\t\t</p>
\t</div>
";
        }
        // line 216
        echo "
";
        // line 217
        // line 218
        echo "
";
        // line 219
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 219)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  931 => 219,  928 => 218,  927 => 217,  924 => 216,  919 => 213,  918 => 212,  907 => 211,  906 => 210,  901 => 208,  898 => 207,  896 => 206,  893 => 205,  888 => 202,  886 => 201,  860 => 200,  859 => 199,  854 => 197,  851 => 196,  849 => 195,  846 => 194,  841 => 191,  839 => 190,  829 => 189,  820 => 188,  819 => 187,  804 => 185,  801 => 184,  799 => 183,  796 => 182,  795 => 181,  792 => 180,  785 => 176,  780 => 175,  774 => 173,  771 => 172,  763 => 170,  761 => 169,  754 => 168,  747 => 167,  732 => 165,  727 => 164,  725 => 163,  722 => 162,  721 => 161,  718 => 160,  706 => 159,  703 => 158,  702 => 157,  694 => 154,  691 => 153,  689 => 152,  688 => 151,  685 => 150,  681 => 148,  679 => 147,  676 => 146,  670 => 142,  649 => 137,  641 => 136,  635 => 135,  629 => 134,  625 => 132,  624 => 131,  620 => 129,  607 => 128,  598 => 127,  593 => 126,  589 => 124,  584 => 121,  578 => 120,  568 => 118,  566 => 117,  560 => 116,  553 => 115,  549 => 114,  545 => 112,  543 => 111,  540 => 110,  537 => 109,  528 => 108,  525 => 107,  513 => 106,  499 => 105,  496 => 104,  494 => 103,  482 => 101,  473 => 100,  465 => 99,  450 => 98,  449 => 97,  446 => 96,  440 => 95,  429 => 94,  425 => 93,  407 => 92,  403 => 91,  395 => 86,  391 => 85,  387 => 84,  375 => 83,  368 => 78,  366 => 77,  363 => 76,  357 => 72,  336 => 67,  328 => 66,  322 => 65,  316 => 64,  312 => 62,  311 => 61,  307 => 59,  284 => 58,  274 => 57,  265 => 56,  260 => 55,  256 => 53,  251 => 50,  245 => 49,  235 => 47,  233 => 46,  227 => 45,  220 => 44,  216 => 43,  212 => 41,  210 => 40,  207 => 39,  204 => 38,  195 => 37,  192 => 36,  180 => 35,  166 => 34,  163 => 33,  161 => 32,  149 => 30,  140 => 29,  132 => 28,  117 => 27,  116 => 26,  113 => 25,  107 => 24,  96 => 23,  92 => 22,  79 => 21,  75 => 20,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  48 => 7,  46 => 6,  40 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}

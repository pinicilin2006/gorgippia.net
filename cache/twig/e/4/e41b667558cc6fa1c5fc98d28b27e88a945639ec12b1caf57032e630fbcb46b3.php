<?php

/* memberlist_body.html */
class __TwigTemplate_e41b667558cc6fa1c5fc98d28b27e88a945639ec12b1caf57032e630fbcb46b3 extends Twig_Template
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
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 4
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
\t";
        // line 7
        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
            // line 8
            echo "\t\t<h2 class=\"group-title\"";
            if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
                echo " style=\"color:#";
                echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
                echo ";\"";
            }
            echo ">";
            echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
            echo "</h2>
\t\t<p>";
            // line 9
            echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
            echo " ";
            echo (isset($context["GROUP_TYPE"]) ? $context["GROUP_TYPE"] : null);
            echo "</p>
\t";
        } else {
            // line 11
            echo "\t\t<h2>";
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <a href=\"";
                echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
                echo "\">";
                echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                echo "</a>";
            }
            echo "</h2>

\t\t<div class=\"action-bar top\">
\t\t\t";
            // line 14
            if ( !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                // line 15
                echo "\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
                // line 16
                if (((isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
                    echo "<a href=\"";
                    echo (isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null);
                    echo "\" id=\"member_search\" data-alt-text=\"";
                    echo addslashes($this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH"));
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                    echo "</a> &bull; ";
                } elseif ((((isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null) && (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null)) &&  !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null))) {
                    echo "<a href=\"";
                    echo (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null);
                    echo "\" id=\"member_search\" data-alt-text=\"";
                    echo addslashes($this->env->getExtension('phpbb')->lang("FIND_USERNAME"));
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                    echo "</a> &bull; ";
                }
                // line 17
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_ALL_USERS"]) ? $context["U_ALL_USERS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ALL");
                echo "</a> &bull;
\t\t\t\t<a href=\"";
                // line 18
                echo (isset($context["U_ACTIVE_USERS"]) ? $context["U_ACTIVE_USERS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_ACTIVE_USERS");
                echo "</a> &bull;
\t\t\t\t<a href=\"";
                // line 19
                echo (isset($context["U_INACTIVE_USERS"]) ? $context["U_INACTIVE_USERS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_INACTIVE_USERS");
                echo "</a>
\t\t\t</div>
\t\t\t";
            }
            // line 22
            echo "
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 24
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t\t\t";
            // line 25
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 26
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 26)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 27
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 28
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t";
            }
            // line 30
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 33
        echo "
\t<div class=\"panel\" id=\"memberlist_search\"";
        // line 34
        if ( !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null)) {
            echo " style=\"display: none;\"";
        }
        echo ">
\t";
        // line 35
        $location = "memberlist_search.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 35)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 36
        echo "\t</div>
\t<form method=\"post\" action=\"";
        // line 37
        echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
        echo "\"";
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            echo " id=\"results\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo (isset($context["S_FORM_NAME"]) ? $context["S_FORM_NAME"] : null);
            echo "\" data-field-name=\"";
            echo (isset($context["S_FIELD_NAME"]) ? $context["S_FIELD_NAME"] : null);
            echo "\"";
        }
        echo ">

\t";
        // line 39
        if ((((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) ||  !(isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) ||  !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
            // line 40
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t<table class=\"table1\" id=\"memberlist\">
\t\t<thead>
\t\t<tr>
\t\t\t";
            // line 46
            if ((isset($context["STYLE_ML_SHOW_ROW_NUMBERS"]) ? $context["STYLE_ML_SHOW_ROW_NUMBERS"] : null)) {
                echo "<th class=\"number\">&nbsp;</th>";
            }
            // line 47
            echo "\t\t\t<th class=\"name\" data-dfn=\"";
            if ((isset($context["STYLE_ML_SHOW_RANK"]) ? $context["STYLE_ML_SHOW_RANK"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            }
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\">";
            if ((isset($context["STYLE_ML_SHOW_RANK"]) ? $context["STYLE_ML_SHOW_RANK"] : null)) {
                if ($this->getAttribute((isset($context["memberrow"]) ? $context["memberrow"] : null), "RANK_IMG", array())) {
                    echo $this->getAttribute((isset($context["memberrow"]) ? $context["memberrow"] : null), "RANK_IMG", array());
                } else {
                    echo $this->getAttribute((isset($context["memberrow"]) ? $context["memberrow"] : null), "RANK_TITLE", array());
                }
            }
            echo "</span><a href=\"";
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t";
            // line 48
            if ((((isset($context["STYLE_ML_SHOW_RATING"]) ? $context["STYLE_ML_SHOW_RATING"] : null) || (isset($context["STYLE_ML_SHOW_RATING_DETAILED"]) ? $context["STYLE_ML_SHOW_RATING_DETAILED"] : null)) && (isset($context["U_SORT_RATING"]) ? $context["U_SORT_RATING"] : null))) {
                echo "<th class=\"posts\"><a href=\"";
                echo (isset($context["U_SORT_RATING"]) ? $context["U_SORT_RATING"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("USER_RATING");
                echo "</a></th>";
            }
            // line 49
            echo "\t\t\t";
            if ((((isset($context["STYLE_ML_SHOW_RATED"]) ? $context["STYLE_ML_SHOW_RATED"] : null) || (isset($context["STYLE_ML_SHOW_RATED_DETAILED"]) ? $context["STYLE_ML_SHOW_RATED_DETAILED"] : null)) && (isset($context["U_SORT_RATED"]) ? $context["U_SORT_RATED"] : null))) {
                echo "<th class=\"posts\"><a href=\"";
                echo (isset($context["U_SORT_RATED"]) ? $context["U_SORT_RATED"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("USER_RATED");
                echo "</a></th>";
            }
            // line 50
            echo "\t\t\t";
            if ((isset($context["STYLE_ML_SHOW_POSTS"]) ? $context["STYLE_ML_SHOW_POSTS"] : null)) {
                echo "<th class=\"posts\"><a href=\"";
                echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</a></th>";
            }
            // line 51
            echo "\t\t\t<th class=\"info\">";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t";
            // line 52
            if ((isset($context["STYLE_ML_SHOW_JOINED"]) ? $context["STYLE_ML_SHOW_JOINED"] : null)) {
                echo "<th class=\"joined\"><a href=\"";
                echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo "</a></th>";
            }
            // line 53
            echo "\t\t\t";
            if ((isset($context["STYLE_ML_SHOW_LAST_ACTIVE"]) ? $context["STYLE_ML_SHOW_LAST_ACTIVE"] : null)) {
                echo "<th class=\"active\">";
                if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                }
                echo "</th>";
            }
            // line 54
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 58
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 59
            echo "\t\t\t";
            if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                // line 60
                echo "\t\t\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_MEMBER_HEADER", array()))) {
                    // line 61
                    echo "\t\t\t\t";
                    if (((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 62
                        echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
                        // line 63
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 66
                    if ((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 67
                        echo "\t\t</tbody>
\t\t</table>

\t</div>
</div>
";
                    }
                    // line 73
                    echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t";
                    // line 79
                    if ( !(isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 80
                        echo "\t\t";
                        if ((isset($context["STYLE_ML_SHOW_ROW_NUMBERS"]) ? $context["STYLE_ML_SHOW_ROW_NUMBERS"] : null)) {
                            echo "<th class=\"number\">&nbsp;</th>";
                        }
                        // line 81
                        echo "\t\t<th class=\"name\" data-dfn=\"";
                        if ((isset($context["STYLE_ML_SHOW_RANK"]) ? $context["STYLE_ML_SHOW_RANK"] : null)) {
                            echo $this->env->getExtension('phpbb')->lang("RANK");
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        echo "\">";
                        if ((isset($context["STYLE_ML_SHOW_RANK"]) ? $context["STYLE_ML_SHOW_RANK"] : null)) {
                            echo "<span class=\"rank-img\"><a href=\"";
                            echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("RANK");
                            echo "</a></span>";
                        }
                        echo "<a href=\"";
                        echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
                        echo "\">";
                        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t";
                        // line 82
                        if ((((isset($context["STYLE_ML_SHOW_RATING"]) ? $context["STYLE_ML_SHOW_RATING"] : null) || (isset($context["STYLE_ML_SHOW_RATING_DETAILED"]) ? $context["STYLE_ML_SHOW_RATING_DETAILED"] : null)) && (isset($context["U_SORT_RATING"]) ? $context["U_SORT_RATING"] : null))) {
                            echo "<th class=\"posts\"><a href=\"";
                            echo (isset($context["U_SORT_RATING"]) ? $context["U_SORT_RATING"] : null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("USER_RATING");
                            echo "</a></th>";
                        }
                        // line 83
                        echo "\t\t\t";
                        if ((((isset($context["STYLE_ML_SHOW_RATED"]) ? $context["STYLE_ML_SHOW_RATED"] : null) || (isset($context["STYLE_ML_SHOW_RATED_DETAILED"]) ? $context["STYLE_ML_SHOW_RATED_DETAILED"] : null)) && (isset($context["U_SORT_RATED"]) ? $context["U_SORT_RATED"] : null))) {
                            echo "<th class=\"posts\"><a href=\"";
                            echo (isset($context["U_SORT_RATED"]) ? $context["U_SORT_RATED"] : null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("USER_RATED");
                            echo "</a></th>";
                        }
                        // line 84
                        echo "\t\t\t";
                        if ((isset($context["STYLE_ML_SHOW_POSTS"]) ? $context["STYLE_ML_SHOW_POSTS"] : null)) {
                            echo "<th class=\"posts\"><a href=\"";
                            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("POSTS");
                            echo "</a></th>";
                        }
                        // line 85
                        echo "\t\t\t<th class=\"info\">";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t";
                        // line 86
                        if ((isset($context["STYLE_ML_SHOW_JOINED"]) ? $context["STYLE_ML_SHOW_JOINED"] : null)) {
                            echo "<th class=\"joined\"><a href=\"";
                            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("JOINED");
                            echo "</a></th>";
                        }
                        // line 87
                        echo "\t\t\t";
                        if ((isset($context["STYLE_ML_SHOW_LAST_ACTIVE"]) ? $context["STYLE_ML_SHOW_LAST_ACTIVE"] : null)) {
                            echo "<th class=\"active\">";
                            if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                                echo "<a href=\"";
                                echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                                echo "\">";
                                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                                echo "</a>";
                            } else {
                                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            }
                            echo "</th>";
                        }
                        // line 88
                        echo "\t";
                    } elseif ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                        // line 89
                        echo "\t\t";
                        if ((isset($context["STYLE_ML_SHOW_ROW_NUMBERS"]) ? $context["STYLE_ML_SHOW_ROW_NUMBERS"] : null)) {
                            echo "<th class=\"number\">&nbsp;</th>";
                        }
                        // line 90
                        echo "\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t";
                        // line 91
                        if ((((isset($context["STYLE_ML_SHOW_RATING"]) ? $context["STYLE_ML_SHOW_RATING"] : null) || (isset($context["STYLE_ML_SHOW_RATING_DETAILED"]) ? $context["STYLE_ML_SHOW_RATING_DETAILED"] : null)) && (isset($context["U_SORT_RATING"]) ? $context["U_SORT_RATING"] : null))) {
                            echo "<th class=\"posts\">&nbsp;</th>";
                        }
                        // line 92
                        echo "\t\t";
                        if ((((isset($context["STYLE_ML_SHOW_RATED"]) ? $context["STYLE_ML_SHOW_RATED"] : null) || (isset($context["STYLE_ML_SHOW_RATED_DETAILED"]) ? $context["STYLE_ML_SHOW_RATED_DETAILED"] : null)) && (isset($context["U_SORT_RATED"]) ? $context["U_SORT_RATED"] : null))) {
                            echo "<th class=\"posts\">&nbsp;</th>";
                        }
                        // line 93
                        echo "\t\t";
                        if ((isset($context["STYLE_ML_SHOW_POSTS"]) ? $context["STYLE_ML_SHOW_POSTS"] : null)) {
                            echo "<th class=\"posts\">";
                            echo $this->env->getExtension('phpbb')->lang("POSTS");
                            echo "</th>";
                        }
                        // line 94
                        echo "\t\t<th class=\"info\">";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t";
                        // line 95
                        if ((isset($context["STYLE_ML_SHOW_JOINED"]) ? $context["STYLE_ML_SHOW_JOINED"] : null)) {
                            echo "<th class=\"joined\">";
                            echo $this->env->getExtension('phpbb')->lang("JOINED");
                            echo "</th>";
                        }
                        // line 96
                        echo "\t\t";
                        if ((isset($context["STYLE_ML_SHOW_LAST_ACTIVE"]) ? $context["STYLE_ML_SHOW_LAST_ACTIVE"] : null)) {
                            echo "<th class=\"active\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 97
                        echo "\t";
                    }
                    // line 98
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t\t\t";
                    // line 101
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 102
                    echo "\t\t\t\t";
                }
                // line 103
                echo "\t\t\t";
            }
            // line 104
            echo "
\t<tr class=\"";
            // line 105
            if (($this->getAttribute($context["memberrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t";
            // line 106
            if ((isset($context["STYLE_ML_SHOW_ROW_NUMBERS"]) ? $context["STYLE_ML_SHOW_ROW_NUMBERS"] : null)) {
                echo "<td class=\"number\">&nbsp;";
                echo $this->getAttribute($context["memberrow"], "ROW_NUMBER", array());
                echo "&nbsp;</td>";
            }
            // line 107
            echo "\t\t<td>";
            if ((isset($context["STYLE_ML_SHOW_RANK"]) ? $context["STYLE_ML_SHOW_RANK"] : null)) {
                if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                    echo "<span class=\"rank-img\">";
                    echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
                    echo "</span>";
                } else {
                    echo "<span class=\"rank-img\">";
                    echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
                    echo "</span>";
                }
            }
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" /> ";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            if ((isset($context["STYLE_ML_SHOW_GENDER"]) ? $context["STYLE_ML_SHOW_GENDER"] : null)) {
                if ($this->getAttribute($context["memberrow"], "S_GENDER_M", array())) {
                    echo " <img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/icon_gender_m.gif\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("GENDER");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("GENDER_M");
                    echo "\" alt=\"M\" />";
                } elseif ($this->getAttribute($context["memberrow"], "S_GENDER_F", array())) {
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
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t";
            // line 108
            if ((((isset($context["STYLE_ML_SHOW_RATING"]) ? $context["STYLE_ML_SHOW_RATING"] : null) || (isset($context["STYLE_ML_SHOW_RATING_DETAILED"]) ? $context["STYLE_ML_SHOW_RATING_DETAILED"] : null)) && (isset($context["U_SORT_RATING"]) ? $context["U_SORT_RATING"] : null))) {
                echo "<td class=\"posts\">";
                if (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null))) {
                    if (((isset($context["STYLE_ML_SHOW_RATING"]) ? $context["STYLE_ML_SHOW_RATING"] : null) && (isset($context["STYLE_ML_SHOW_RATING_DETAILED"]) ? $context["STYLE_ML_SHOW_RATING_DETAILED"] : null))) {
                        echo $this->getAttribute($context["memberrow"], "RATING", array());
                        echo " (+";
                        echo $this->getAttribute($context["memberrow"], "RATING_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["memberrow"], "RATING_NEGATIVE", array());
                        echo ")";
                    } elseif ((isset($context["STYLE_ML_SHOW_RATING_DETAILED"]) ? $context["STYLE_ML_SHOW_RATING_DETAILED"] : null)) {
                        echo "+";
                        echo $this->getAttribute($context["memberrow"], "RATING_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["memberrow"], "RATING_NEGATIVE", array());
                    } else {
                        echo "<span title=\"+";
                        echo $this->getAttribute($context["memberrow"], "RATING_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["memberrow"], "RATING_NEGATIVE", array());
                        echo "\">";
                        echo $this->getAttribute($context["memberrow"], "RATING", array());
                        echo "</span>";
                    }
                } else {
                    echo $this->getAttribute($context["memberrow"], "RATING", array());
                }
                echo "</td>";
            }
            // line 109
            echo "\t\t";
            if ((((isset($context["STYLE_ML_SHOW_RATED"]) ? $context["STYLE_ML_SHOW_RATED"] : null) || (isset($context["STYLE_ML_SHOW_RATED_DETAILED"]) ? $context["STYLE_ML_SHOW_RATED_DETAILED"] : null)) && (isset($context["U_SORT_RATED"]) ? $context["U_SORT_RATED"] : null))) {
                echo "<td class=\"posts\">";
                if (( !(isset($context["RATE_NO_POSITIVE"]) ? $context["RATE_NO_POSITIVE"] : null) &&  !(isset($context["RATE_NO_NEGATIVE"]) ? $context["RATE_NO_NEGATIVE"] : null))) {
                    if (((isset($context["STYLE_ML_SHOW_RATED"]) ? $context["STYLE_ML_SHOW_RATED"] : null) && (isset($context["STYLE_ML_SHOW_RATED_DETAILED"]) ? $context["STYLE_ML_SHOW_RATED_DETAILED"] : null))) {
                        echo $this->getAttribute($context["memberrow"], "RATED", array());
                        echo " (+";
                        echo $this->getAttribute($context["memberrow"], "RATED_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["memberrow"], "RATED_NEGATIVE", array());
                        echo ")";
                    } elseif ((isset($context["STYLE_ML_SHOW_RATED_DETAILED"]) ? $context["STYLE_ML_SHOW_RATED_DETAILED"] : null)) {
                        echo "+";
                        echo $this->getAttribute($context["memberrow"], "RATED_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["memberrow"], "RATED_NEGATIVE", array());
                    } else {
                        echo "<span title=\"+";
                        echo $this->getAttribute($context["memberrow"], "RATED_POSITIVE", array());
                        echo "/−";
                        echo $this->getAttribute($context["memberrow"], "RATED_NEGATIVE", array());
                        echo "\">";
                        echo $this->getAttribute($context["memberrow"], "RATED", array());
                        echo "</span>";
                    }
                } else {
                    echo $this->getAttribute($context["memberrow"], "RATED", array());
                }
                echo "</td>";
            }
            // line 110
            echo "\t\t";
            if ((isset($context["STYLE_ML_SHOW_POSTS"]) ? $context["STYLE_ML_SHOW_POSTS"] : null)) {
                echo "<td class=\"posts\">";
                if (($this->getAttribute($context["memberrow"], "POSTS", array()) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                    echo "\">";
                    echo $this->getAttribute($context["memberrow"], "POSTS", array());
                    echo "</a>";
                } else {
                    echo $this->getAttribute($context["memberrow"], "POSTS", array());
                }
                echo "</td>";
            }
            // line 111
            echo "\t\t<td class=\"info\">";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t";
            // line 112
            if ((isset($context["STYLE_ML_SHOW_JOINED"]) ? $context["STYLE_ML_SHOW_JOINED"] : null)) {
                echo "<td>";
                echo $this->getAttribute($context["memberrow"], "JOINED", array());
                echo "</td>";
            }
            // line 113
            echo "\t\t";
            if ((isset($context["STYLE_ML_SHOW_LAST_ACTIVE"]) ? $context["STYLE_ML_SHOW_LAST_ACTIVE"] : null)) {
                echo "<td>";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "&nbsp;</td>";
            }
            // line 114
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 116
            echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"20\">";
            // line 117
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 126
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
            // line 127
            echo "<fieldset class=\"display-actions\">
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 132
        echo "
";
        // line 133
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 134
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 135
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 137
        echo "
";
        // line 138
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
            // line 139
            echo "<fieldset class=\"display-options\">
\t<label for=\"sk\">";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo (isset($context["S_MODE_SELECT"]) ? $context["S_MODE_SELECT"] : null);
            echo "</select></label>
\t<label for=\"sd\">";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 142
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button2\" />
</fieldset>
";
        }
        // line 145
        echo "
</form>

<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 150
        echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
        echo "
\t\t";
        // line 151
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            echo " 
\t\t\t";
            // line 152
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 152)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 153
            echo "\t\t";
        } else {
            echo " 
\t\t\t &bull; ";
            // line 154
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t";
        }
        // line 156
        echo "\t</div>
</div>

";
        // line 159
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 160
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 160)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 162
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 162)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 163
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 163)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  869 => 163,  856 => 162,  842 => 160,  840 => 159,  835 => 156,  830 => 154,  825 => 153,  813 => 152,  809 => 151,  805 => 150,  798 => 145,  792 => 142,  786 => 141,  779 => 140,  776 => 139,  774 => 138,  771 => 137,  766 => 135,  763 => 134,  761 => 133,  758 => 132,  750 => 129,  746 => 128,  743 => 127,  741 => 126,  733 => 120,  724 => 117,  721 => 116,  715 => 114,  708 => 113,  702 => 112,  683 => 111,  666 => 110,  635 => 109,  605 => 108,  556 => 107,  550 => 106,  542 => 105,  539 => 104,  536 => 103,  533 => 102,  530 => 101,  525 => 98,  522 => 97,  515 => 96,  509 => 95,  493 => 94,  486 => 93,  481 => 92,  477 => 91,  472 => 90,  467 => 89,  464 => 88,  449 => 87,  441 => 86,  425 => 85,  416 => 84,  407 => 83,  399 => 82,  374 => 81,  369 => 80,  367 => 79,  359 => 73,  351 => 67,  349 => 66,  339 => 63,  336 => 62,  333 => 61,  330 => 60,  327 => 59,  321 => 58,  315 => 54,  300 => 53,  292 => 52,  276 => 51,  267 => 50,  258 => 49,  250 => 48,  221 => 47,  217 => 46,  209 => 40,  207 => 39,  194 => 37,  191 => 36,  179 => 35,  173 => 34,  170 => 33,  165 => 30,  160 => 28,  155 => 27,  143 => 26,  139 => 25,  135 => 24,  131 => 22,  123 => 19,  117 => 18,  110 => 17,  92 => 16,  89 => 15,  87 => 14,  72 => 11,  65 => 9,  54 => 8,  52 => 7,  49 => 6,  35 => 4,  21 => 2,  19 => 1,);
    }
}

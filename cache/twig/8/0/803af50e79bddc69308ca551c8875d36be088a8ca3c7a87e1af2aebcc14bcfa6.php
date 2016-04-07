<?php

/* ucp_register.html */
class __TwigTemplate_803af50e79bddc69308ca551c8875d36be088a8ca3c7a87e1af2aebcc14bcfa6 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null)) {
            // line 4
            echo "<script>
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
            // line 10
            echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
            echo "_lang=' + lang_iso + '; path=";
            echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
            echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
</script>
";
        }
        // line 16
        echo "
<form method=\"post\" action=\"";
        // line 17
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\" id=\"register\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<h2>";
        // line 22
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " - ";
        echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
        echo "</h2>

\t<fieldset class=\"fields2\">
\t";
        // line 25
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<dl><dd class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</dd></dl>";
        }
        // line 26
        echo "\t";
        if ((isset($context["L_REG_COND"]) ? $context["L_REG_COND"] : null)) {
            // line 27
            echo "\t\t<dl><dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("REG_COND");
            echo "</strong></dd></dl>
\t";
        }
        // line 29
        echo "\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('uloginteam_ulogin', '__main__'));
        $this->env->loadTemplate('@uloginteam_ulogin/event/ucp_register_credentials_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 30
        echo "\t<dl>
\t\t<dt><label for=\"username\">";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
        // line 32
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"email\">";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"email\" tabindex=\"2\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 36
        echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"new_password\">";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" tabindex=\"4\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 40
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("NEW_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"password_confirm\">";
        // line 43
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"password\" tabindex=\"5\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 44
        echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>

\t";
        // line 47
        // line 48
        echo "\t<hr />

\t";
        // line 50
        // line 51
        echo "
\t";
        // line 52
        if ((isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null)) {
            // line 53
            echo "\t<dl>
\t\t<dt><label for=\"lang\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
            echo "\">";
            echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t";
        }
        // line 58
        echo "
\t";
        // line 59
        if ((isset($context["S_TZ_OPTIONS"]) ? $context["S_TZ_OPTIONS"] : null)) {
            // line 60
            echo "\t";
            $location = "timezone_option.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("timezone_option.html", "ucp_register.html", 60)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 61
            echo "\t";
        }
        // line 62
        echo "
\t";
        // line 63
        // line 64
        echo "\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()))) {
            // line 65
            echo "\t\t<dl><dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("ITEMS_REQUIRED");
            echo "</strong></dd></dl>

\t";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 68
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 69
                if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                    echo " for=\"";
                    echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                    echo " *";
                }
                echo "</label>
\t\t\t";
                // line 70
                if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                    echo "</span>";
                }
                // line 71
                echo "\t\t\t";
                if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                    echo "<br /><span class=\"error\">";
                    echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 72
                echo $this->getAttribute($context["profile_fields"], "FIELD", array());
                echo "</dd>
\t\t</dl>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t";
        }
        // line 76
        echo "
\t";
        // line 77
        // line 78
        echo "\t</fieldset>
\t</div>
</div>
";
        // line 81
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 82
            echo "\t";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 83
            echo "\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "ucp_register.html", 83)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 85
        echo "
";
        // line 86
        if ((isset($context["S_COPPA"]) ? $context["S_COPPA"] : null)) {
            // line 87
            echo "

<div class=\"panel\">
\t<div class=\"inner\">

\t<h4>";
            // line 92
            echo $this->env->getExtension('phpbb')->lang("COPPA_COMPLIANCE");
            echo "</h4>

\t<p>";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("COPPA_EXPLAIN");
            echo "</p>
\t</div>
</div>
";
        }
        // line 98
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons\">
\t\t";
        // line 103
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<input type=\"reset\" value=\"";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 105
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1 default-submit-action\" />
\t\t<input type=\"hidden\" name=\"creation_time\" value=\"0\" />
\t\t<input type=\"hidden\" name=\"form_token\" value=\"0\" />
\t</fieldset>

\t</div>
</div>
</form>

<script>
function addListener(obj, type, listener) {
\tif (obj.addEventListener) {
\t\tobj.addEventListener(type, listener, false);
\t\treturn true;
\t} else if(obj.attachEvent) {
\t\tobj.attachEvent('on' + type, listener);
\t\treturn true;
\t}
\treturn false;
}

addListener(document.getElementById(\"register\"), 'submit', function() {
\t\$('i'+'nput[nam'+'e=cre'+'ation_ti'+'me]').val('";
        // line 127
        echo (isset($context["RAW_CREATION_TIME"]) ? $context["RAW_CREATION_TIME"] : null);
        echo "');
\t\$('in'+'pu'+'t[nam'+'e=form'+'_to'+'ken]').val('";
        // line 128
        echo (isset($context["RAW_FORM_TOKEN"]) ? $context["RAW_FORM_TOKEN"] : null);
        echo "');
});
</script>

";
        // line 132
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 132)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 132,  360 => 128,  356 => 127,  331 => 105,  327 => 104,  323 => 103,  316 => 98,  309 => 94,  304 => 92,  297 => 87,  295 => 86,  292 => 85,  278 => 83,  274 => 82,  272 => 81,  267 => 78,  266 => 77,  263 => 76,  260 => 75,  251 => 72,  242 => 71,  236 => 70,  222 => 69,  219 => 68,  215 => 67,  209 => 65,  206 => 64,  205 => 63,  202 => 62,  199 => 61,  186 => 60,  184 => 59,  181 => 58,  173 => 55,  168 => 54,  165 => 53,  163 => 52,  160 => 51,  159 => 50,  155 => 48,  154 => 47,  146 => 44,  141 => 43,  133 => 40,  126 => 39,  118 => 36,  113 => 35,  105 => 32,  98 => 31,  95 => 30,  89 => 29,  83 => 27,  80 => 26,  74 => 25,  66 => 22,  58 => 17,  55 => 16,  44 => 10,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}

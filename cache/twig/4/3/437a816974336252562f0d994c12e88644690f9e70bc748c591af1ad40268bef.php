<?php

/* ucp_prefs_personal.html */
class __TwigTemplate_437a816974336252562f0d994c12e88644690f9e70bc748c591af1ad40268bef extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_prefs_personal.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t";
        // line 11
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 12
        echo "\t";
        // line 13
        echo "\t";
        if ( !(isset($context["S_HIDE_ALL_EMAILS"]) ? $context["S_HIDE_ALL_EMAILS"] : null)) {
            // line 14
            echo "\t<dl>
\t\t<dt><label for=\"viewemail0\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("SHOW_EMAIL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"viewemail1\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail1\" value=\"1\"";
            // line 17
            if ((isset($context["S_VIEW_EMAIL"]) ? $context["S_VIEW_EMAIL"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label for=\"viewemail0\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail0\" value=\"0\"";
            // line 18
            if ( !(isset($context["S_VIEW_EMAIL"]) ? $context["S_VIEW_EMAIL"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t";
        }
        // line 22
        echo "\t<dl>
\t\t<dt><label for=\"massemail1\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("ADMIN_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"massemail1\"><input type=\"radio\" name=\"massemail\" id=\"massemail1\" value=\"1\"";
        // line 25
        if ((isset($context["S_MASS_EMAIL"]) ? $context["S_MASS_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"massemail0\"><input type=\"radio\" name=\"massemail\" id=\"massemail0\" value=\"0\"";
        // line 26
        if ( !(isset($context["S_MASS_EMAIL"]) ? $context["S_MASS_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"allowpm1\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("ALLOW_PM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("ALLOW_PM_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"allowpm1\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm1\" value=\"1\"";
        // line 32
        if ((isset($context["S_ALLOW_PM"]) ? $context["S_ALLOW_PM"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"allowpm0\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm0\" value=\"0\"";
        // line 33
        if ( !(isset($context["S_ALLOW_PM"]) ? $context["S_ALLOW_PM"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 36
        if ((isset($context["S_CAN_HIDE_ONLINE"]) ? $context["S_CAN_HIDE_ONLINE"] : null)) {
            // line 37
            echo "\t\t<dl>
\t\t\t<dt><label for=\"hideonline0\">";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("HIDE_ONLINE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("HIDE_ONLINE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"hideonline1\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline1\" value=\"1\"";
            // line 40
            if ((isset($context["S_HIDE_ONLINE"]) ? $context["S_HIDE_ONLINE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label for=\"hideonline0\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline0\" value=\"0\"";
            // line 41
            if ( !(isset($context["S_HIDE_ONLINE"]) ? $context["S_HIDE_ONLINE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 45
        echo "\t";
        if ((isset($context["S_SELECT_NOTIFY"]) ? $context["S_SELECT_NOTIFY"] : null)) {
            // line 46
            echo "\t\t<dl>
\t\t\t<dt><label for=\"notifymethod0\">";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"notifymethod0\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod0\" value=\"0\"";
            // line 49
            if ((isset($context["S_NOTIFY_EMAIL"]) ? $context["S_NOTIFY_EMAIL"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_EMAIL");
            echo "</label>
\t\t\t\t<label for=\"notifymethod1\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod1\" value=\"1\"";
            // line 50
            if ((isset($context["S_NOTIFY_IM"]) ? $context["S_NOTIFY_IM"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_IM");
            echo "</label>
\t\t\t\t<label for=\"notifymethod2\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod2\" value=\"2\"";
            // line 51
            if ((isset($context["S_NOTIFY_BOTH"]) ? $context["S_NOTIFY_BOTH"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_BOTH");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 55
        echo "
\t";
        // line 56
        if ((isset($context["S_MORE_LANGUAGES"]) ? $context["S_MORE_LANGUAGES"] : null)) {
            // line 57
            echo "\t\t<dl>
\t\t\t<dt><label for=\"lang\">";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("BOARD_LANGUAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"lang\" id=\"lang\">";
            // line 59
            echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
            echo "</select></dd>
\t\t</dl>
\t";
        }
        // line 62
        echo "
\t";
        // line 63
        if (((isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null) && (isset($context["S_MORE_STYLES"]) ? $context["S_MORE_STYLES"] : null))) {
            // line 64
            echo "\t\t<dl>
\t\t\t<dt><label for=\"user_style\">";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("BOARD_STYLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"user_style\" id=\"user_style\">";
            // line 66
            echo (isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null);
            echo "</select></dd>
\t\t</dl>
\t";
        }
        // line 69
        echo "
\t";
        // line 70
        if ((isset($context["S_TZ_OPTIONS"]) ? $context["S_TZ_OPTIONS"] : null)) {
            // line 71
            echo "\t";
            $location = "timezone_option.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("timezone_option.html", "ucp_prefs_personal.html", 71)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 72
            echo "\t";
        }
        // line 73
        echo "
\t";
        // line 74
        if ((isset($context["S_DATEFORMAT_OPTIONS"]) ? $context["S_DATEFORMAT_OPTIONS"] : null)) {
            // line 75
            echo "\t<dl>
\t\t<dt><label for=\"dateformat\">";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("BOARD_DATE_FORMAT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DATE_FORMAT_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<select name=\"dateoptions\" id=\"dateoptions\" onchange=\"if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('dateformat').value = default_dateformat; } else { document.getElementById('dateformat').value = this.value; }\">
\t\t\t\t";
            // line 79
            echo (isset($context["S_DATEFORMAT_OPTIONS"]) ? $context["S_DATEFORMAT_OPTIONS"] : null);
            echo "
\t\t\t</select>
\t\t</dd>
\t\t<dd id=\"custom_date\" style=\"display:none;\"><input type=\"text\" name=\"dateformat\" id=\"dateformat\" value=\"";
            // line 82
            echo (isset($context["DATE_FORMAT"]) ? $context["DATE_FORMAT"] : null);
            echo "\" maxlength=\"30\" class=\"inputbox narrow\" style=\"margin-top: 3px;\" /></dd>
\t</dl>
\t";
        }
        // line 85
        echo "
\t";
        // line 86
        // line 87
        echo "\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 93
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 94
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 95
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 99
        if ((isset($context["S_DATEFORMAT_OPTIONS"]) ? $context["S_DATEFORMAT_OPTIONS"] : null)) {
            // line 100
            echo "<script>
\tvar date_format = '";
            // line 101
            echo (isset($context["A_DATE_FORMAT"]) ? $context["A_DATE_FORMAT"] : null);
            echo "';
\tvar default_dateformat = '";
            // line 102
            echo (isset($context["A_DEFAULT_DATEFORMAT"]) ? $context["A_DEFAULT_DATEFORMAT"] : null);
            echo "';

\tfunction customDates()
\t{
\t\tvar e = document.getElementById('dateoptions');

\t\te.selectedIndex = e.length - 1;

\t\t// Loop and match date_format in menu
\t\tfor (var i = 0; i < e.length; i++)
\t\t{
\t\t\tif (e.options[i].value == date_format)
\t\t\t{
\t\t\t\te.selectedIndex = i;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Show/hide custom field
\t\tif (e.selectedIndex == e.length - 1)
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',1);
\t\t}
\t\telse
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',-1);
\t\t}
\t}

\twindow.onload = customDates;
</script>
";
        }
        // line 134
        echo "
";
        // line 135
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_personal.html", 135)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_personal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 135,  375 => 134,  340 => 102,  336 => 101,  333 => 100,  331 => 99,  324 => 95,  320 => 94,  314 => 93,  306 => 87,  305 => 86,  302 => 85,  296 => 82,  290 => 79,  281 => 76,  278 => 75,  276 => 74,  273 => 73,  270 => 72,  257 => 71,  255 => 70,  252 => 69,  246 => 66,  241 => 65,  238 => 64,  236 => 63,  233 => 62,  227 => 59,  222 => 58,  219 => 57,  217 => 56,  214 => 55,  203 => 51,  195 => 50,  187 => 49,  181 => 47,  178 => 46,  175 => 45,  164 => 41,  156 => 40,  148 => 38,  145 => 37,  143 => 36,  133 => 33,  125 => 32,  117 => 30,  106 => 26,  98 => 25,  92 => 23,  89 => 22,  78 => 18,  70 => 17,  64 => 15,  61 => 14,  58 => 13,  56 => 12,  50 => 11,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}

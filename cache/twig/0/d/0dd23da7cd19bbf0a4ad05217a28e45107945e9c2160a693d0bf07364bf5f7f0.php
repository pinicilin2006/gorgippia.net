<?php

/* plupload.html */
class __TwigTemplate_0dd23da7cd19bbf0a4ad05217a28e45107945e9c2160a693d0bf07364bf5f7f0 extends Twig_Template
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
        echo "<script>
phpbb.plupload = {
\ti18n: {
\t\t'b': '";
        // line 4
        echo addslashes($this->env->getExtension('phpbb')->lang("BYTES_SHORT"));
        echo "',
\t\t'kb': '";
        // line 5
        echo addslashes($this->env->getExtension('phpbb')->lang("KB"));
        echo "',
\t\t'mb': '";
        // line 6
        echo addslashes($this->env->getExtension('phpbb')->lang("MB"));
        echo "',
\t\t'gb': '";
        // line 7
        echo addslashes($this->env->getExtension('phpbb')->lang("GB"));
        echo "',
\t\t'tb': '";
        // line 8
        echo addslashes($this->env->getExtension('phpbb')->lang("TB"));
        echo "',
\t\t'Add Files': '";
        // line 9
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES"));
        echo "',
\t\t'Add files to the upload queue and click the start button.': '";
        // line 10
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES_TO_QUEUE"));
        echo "',
\t\t'Allowed file size for files of this type:': '";
        // line 11
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_ALLOWED_SIZE"));
        echo "',
\t\t'Close': '";
        // line 12
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_CLOSE"));
        echo "',
\t\t'Drag files here.': '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_DRAG"));
        echo "',
\t\t'Duplicate file error.': '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_DUPLICATE_ERROR"));
        echo "',
\t\t'File: %s': '";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE"));
        echo "',
\t\t'File: %s, size: %d, max file size: %d': '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE_DETAILS"));
        echo "',
\t\t'File count error.': '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_COUNT"));
        echo "',
\t\t'File extension error.': '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_INVALID_EXT"));
        echo "',
\t\t'File size error.': '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_TOO_LARGE"));
        echo "',
\t\t'Filename': '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILENAME"));
        echo "',
\t\t'Generic error.': '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_GENERIC_ERROR"));
        echo "',
\t\t'HTTP Error.': '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_HTTP_ERROR"));
        echo "',
\t\t'Image format either wrong or not supported.': '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_IMAGE_FORMAT"));
        echo "',
\t\t'Init error.': '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_INIT_ERROR"));
        echo "',
\t\t'IO error.': '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_IO_ERROR"));
        echo "',
\t\t'N/A': '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_NOT_APPLICABLE"));
        echo "',
\t\t'Runtime ran out of available memory.': '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_RUNTIME_MEMORY"));
        echo "',
\t\t'Security error.': '";
        // line 28
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SECURITY_ERROR"));
        echo "',
\t\t'Select files': '";
        // line 29
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SELECT_FILES"));
        echo "',
\t\t'Size': '";
        // line 30
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE"));
        echo "',
\t\t'Start Upload': '";
        // line 31
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_START_UPLOAD"));
        echo "',
\t\t'Start uploading queue': '";
        // line 32
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_START_CURRENT_UPLOAD"));
        echo "',
\t\t'Status': '";
        // line 33
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STATUS"));
        echo "',
\t\t'Stop Upload': '";
        // line 34
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_UPLOAD"));
        echo "',
\t\t'Stop current upload': '";
        // line 35
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_CURRENT_UPLOAD"));
        echo "',
\t\t'Try to use zip or 7z archives.': '";
        // line 36
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_USE_ARCHIVES"));
        echo "',
\t\t\"Upload URL might be wrong or doesn't exist.\": '";
        // line 37
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_UPLOAD_URL"));
        echo "',
\t\t'Uploaded %d/%d files': '";
        // line 38
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_UPLOADED"));
        echo "',
\t\t'%d files queued': '";
        // line 39
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILES_QUEUED"));
        echo "',
\t\t'%s already present in the queue.': '";
        // line 40
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ALREADY_QUEUED"));
        echo "'
\t},
\tconfig: {
\t\truntimes: 'html5',
\t\turl: '";
        // line 44
        echo (isset($context["S_PLUPLOAD_URL"]) ? $context["S_PLUPLOAD_URL"] : null);
        echo "',
\t\tmax_file_size: '";
        // line 45
        echo (isset($context["FILESIZE"]) ? $context["FILESIZE"] : null);
        echo "b',
\t\tchunk_size: '";
        // line 46
        echo (isset($context["CHUNK_SIZE"]) ? $context["CHUNK_SIZE"] : null);
        echo "b',
\t\tunique_names: true,
\t\tfilters: [";
        // line 48
        echo (isset($context["FILTERS"]) ? $context["FILTERS"] : null);
        echo "],
\t\t";
        // line 49
        echo (isset($context["S_RESIZE"]) ? $context["S_RESIZE"] : null);
        echo "
\t\theaders: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},
\t\tfile_data_name: 'fileupload',
\t\tmultipart_params: {'add_file': '";
        // line 52
        echo addslashes($this->env->getExtension('phpbb')->lang("ADD_FILE"));
        echo "'},
\t\tform_hook: '#postform',
\t\tbrowse_button: 'add_files',
\t\tdrop_element : 'message',
\t},
\tlang: {
\t\tERROR: '";
        // line 58
        echo addslashes($this->env->getExtension('phpbb')->lang("ERROR"));
        echo "',
\t\tTOO_MANY_ATTACHMENTS: '";
        // line 59
        echo addslashes($this->env->getExtension('phpbb')->lang("TOO_MANY_ATTACHMENTS"));
        echo "',
\t},
\torder: '";
        // line 61
        echo (isset($context["ATTACH_ORDER"]) ? $context["ATTACH_ORDER"] : null);
        echo "',
\tmaxFiles: ";
        // line 62
        echo (isset($context["MAX_ATTACHMENTS"]) ? $context["MAX_ATTACHMENTS"] : null);
        echo ",
\tdata: ";
        // line 63
        echo (isset($context["S_ATTACH_DATA"]) ? $context["S_ATTACH_DATA"] : null);
        echo ",
\tallowed: ";
        // line 64
        echo (isset($context["ALLOWED_EXTENSIONS_JSON"]) ? $context["ALLOWED_EXTENSIONS_JSON"] : null);
        echo ",
}
</script>
";
        // line 67
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/plupload/plupload.full.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('6');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 68
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/plupload.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('6');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
    }

    public function getTemplateName()
    {
        return "plupload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 68,  234 => 67,  228 => 64,  224 => 63,  220 => 62,  216 => 61,  211 => 59,  207 => 58,  198 => 52,  192 => 49,  188 => 48,  183 => 46,  179 => 45,  175 => 44,  168 => 40,  164 => 39,  160 => 38,  156 => 37,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}

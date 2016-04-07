<?php exit; ?>
1460024228
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (forum_moderator_cache m) LEFT JOIN forum_users u ON (m.user_id = u.user_id) LEFT JOIN forum_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
242
a:1:{i:0;a:9:{s:8:"forum_id";s:1:"0";s:7:"user_id";s:1:"2";s:8:"username";s:5:"admin";s:8:"group_id";s:1:"0";s:10:"group_name";s:0:"";s:16:"display_on_index";s:1:"1";s:11:"user_colour";s:6:"AA0000";s:12:"group_colour";N;s:10:"group_type";N;}}
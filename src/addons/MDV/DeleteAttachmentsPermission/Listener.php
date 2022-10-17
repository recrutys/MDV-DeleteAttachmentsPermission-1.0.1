<?php

namespace MDV\DeleteAttachmentsPermission;

use XF;
use XF\Entity\Attachment;

class Listener
{
    public static function entityPreDelete(Attachment $attachment)
    {
        if (!XF::visitor()->hasPermission('mdv_dap', 'mdv_dap_can_delete'))
        {
            $attachment->error(XF::phrase('do_not_have_permission'));
        }
    }
}
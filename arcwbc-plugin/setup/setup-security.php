<?php

//Add WBC Capabilities to roles
function wbc_add_cap() {
    $roles = wp_roles();
    foreach ($roles->roles as $key => $role) {

        // Add capabilities based on minimum existing capability
        // if (isset($roles[$key]) && $role->has_cap('BUILT_IN_CAP')) {
        //     $role->add_cap('THE_NEW_CAP');
        // }

        // For testing we use Super Admin
        $roleObj = $roles->get_role($key);
        if ($roleObj != null && $roleObj->name === 'administrator'){
            $roleObj->add_cap('wbc_access');
            $roleObj->add_cap('wbc_view_volunteers');
            $roleObj->add_cap('wbc_edit_volunteers');
            $roleObj->add_cap('wbc_view_events');
            $roleObj->add_cap('wbc_edit_events');
            $roleObj->add_cap('wbc_view_settings');
            $roleObj->add_cap('wbc_edit_settings');
            $roleObj->add_cap('wbc_send_email');
        }
    }
}

//Remove WBC Capabilities from all roles
function wbc_remove_cap() {
    $roles = wp_roles();
    foreach ($roles->roles as $key => $role) {
        // Remove WBC Capabilities from all roles
        $roleObj = $roles->get_role($key);
        if ($roleObj != null){
            $roleObj->remove_cap('wbc_access');
            $roleObj->remove_cap('wbc_view_volunteers');
            $roleObj->remove_cap('wbc_edit_volunteers');
            $roleObj->remove_cap('wbc_view_events');
            $roleObj->remove_cap('wbc_edit_events');
            $roleObj->remove_cap('wbc_view_settings');
            $roleObj->remove_cap('wbc_edit_settings');
            $roleObj->remove_cap('wbc_send_email');
        }
        
    }
}

function wbc_activation(){
    wbc_add_cap();
}

function wbc_deactivation(){

}

function wbc_uninstall(){
    wbc_remove_cap();
}

?>
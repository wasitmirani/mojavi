<?php

use App\Helper\HelperComponent;


function getIconImg($file,$type){
    switch ($type) {
        case 'png':
            return asset('icons/'.$file.".".$type);
        break;
        case 'webp':
            return asset('icons/'.$file.".".$type);
        break;
        default:
        return asset('icons/'.$file);
        break;
    }

}

function SingleImgUpload($request, $path)
{
    if ($request->hasfile('thumbnail')) {
        $name = Str::slug(!empty($request->name) ? $request->name : config('app.name'), '-')  . "-" . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path($path), $name);
    } else
        $name = "";
    return $name;
}

function sideBarMenu()
{
    return HelperComponent::SideBar();
}
function setSingleLink($title, $icon, $can = null, $v_can = null, $url = null, $v_route = null)
{
    return [
        "title" => $title,
        "icon" => $icon,
        "can" => $can,
        "v-can" => $v_can,
        "url" => $url,
        "v-route" => $v_route,
    ];
}
function setSubMenu($url = null, $title, $icon = null, $v_can = null, $can = null, $v_route = null)
{
    return [
        "url" => $url,
        "title" => $title,
        "icon" => $icon,
        "can" => $can,
        "v-can" => $v_can,
        "v-route" => $v_route,
    ];
}


?>

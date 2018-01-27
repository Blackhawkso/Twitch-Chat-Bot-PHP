<?php

if ($route === 'config_botadministrators')
{
    render('header', array('title' => $title), false);
    render('container_botadministrators', array('administrators' => $administrators ), false);
    render('footer', array(), false);
}
else if ($route === 'config_botcommands')
{
    render('header', array('title' => $title), false);
    render('container_botcommands', array('commands' => $commands ), false);
    render('footer', array(), false);
}
else if ($route === 'config_botperiodicmessages')
{
    render('header', array('title' => $title), false);
    render('container_botperiodicmessages', array('periodic_messages' => $periodic_messages ), false);
    render('footer', array(), false);
}
else if ($route === 'twitchchat')
{
    render('header', array('title' => $title), false);
    render('container_twitchchat', array('twitch_channel_name' => $twitch_channel_name ), false);
    render('footer', array(), false);
}
else if ($route === 'polls_home')
{
    render('header', array('title' => $title), false);
    render('container_polls_home', array('poll_files' => $poll_files ), false);
    render('footer', array(), false);
}
else if ($route === 'poll_details')
{
    render('header', array('title' => $title), false);
    render('container_poll_details', array('poll_details' => $poll_details, 'poll_filename' => $poll_filename ), false);
    render('footer', array(), false);
}
else
{
    // 404:
    render('404', array(), false);
}

?>

<?php

glz_loadLocale('desiderataLibrary');
desiderataLibrary_modules_blog_Module::registerModule();

__ObjectFactory::remapClass('org.glizy.models.User', 'desiderataLibrary.models.User');
__ObjectFactory::remapClass('org.glizy.models.UserGroup', 'desiderataLibrary.models.UserGroup');

desiderataLibrary_Multisite::init();
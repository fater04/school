<?php
use app\DefaultApp\DefaultApp as App;
App::get("/", "default.index", );
App::get("/Accueil", "default.index", "Accueil");


App::get("/test", "default.test", "test");
App::get("/contact", "default.contact", "contact");
App::post("/contact", "default.contact", "contact");


App::get("/presentation", "default.presentation", "presentation");
App::get("/historique", "default.historique", "historique");
App::get("/kindergarten", "default.kindergarten", "kindergarten");

App::get("/condition", "default.condition", "condition");
App::get("/formulaire-admission", "default.formulaire", "formulaire");
App::post("/formulaire-admission", "default.formulaire", "formulaire");

App::get("/actualites", "default.actualites", "actualites");
App::get("/single-post", "default.single", "single")->avec("id", "['0-9']+");
App::post("/single-post", "default.single", "single")->avec("id", "['0-9']+");

App::get("/gallerie", "default.gallerie", "gallerie");
App::get("/staff", "default.staff", "staff");
App::get("/dashboard", "admin.dashboard", "dashboard");


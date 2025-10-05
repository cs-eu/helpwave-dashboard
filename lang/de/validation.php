<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted" => ":Attribute muss akzeptiert werden.",
    "accepted_if" => ":Attribute muss akzeptiert werden, wenn :other :value ist.",
    "active_url" => ":Attribute ist keine gültige Internet-Adresse.",
    "after" => ":Attribute muss ein Datum nach :date sein.",
    "after_or_equal" => ":Attribute muss ein Datum nach :date oder gleich :date sein.",
    "alpha" => ":Attribute darf nur aus Buchstaben bestehen.",
    "alpha_dash" => ":Attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen.",
    "alpha_num" => ":Attribute darf nur aus Buchstaben und Zahlen bestehen.",
    "array" => ":Attribute muss ein Array sein.",
    "attached" => ":Attribute ist bereits angehängt.",
    "before" => ":Attribute muss ein Datum vor :date sein.",
    "before_or_equal" => ":Attribute muss ein Datum vor :date oder gleich :date sein.",
    "between.array" => ":Attribute muss zwischen :min & :max Elemente haben.",
    "between.file" => ":Attribute muss zwischen :min & :max Kilobytes groß sein.",
    "between.numeric" => ":Attribute muss zwischen :min & :max liegen.",
    "between.string" => ":Attribute muss zwischen :min & :max Zeichen lang sein.",
    "boolean" => ":Attribute muss entweder 'true' oder 'false' sein.",
    "confirmed" => ":Attribute stimmt nicht mit der Bestätigung überein.",
    "current_password" => "Das Passwort ist falsch.",
    "date" => ":Attribute muss ein gültiges Datum sein.",
    "date_equals" => ":Attribute muss ein Datum gleich :date sein.",
    "date_format" => ":Attribute entspricht nicht dem gültigen Format für :format.",
    "declined" => ":Attribute muss abgelehnt werden.",
    "declined_if" => ":Attribute muss abgelehnt werden wenn :other :value ist.",
    "different" => ":Attribute und :other müssen sich unterscheiden.",
    "digits" => ":Attribute muss :digits Stellen haben.",
    "digits_between" => ":Attribute muss zwischen :min und :max Stellen haben.",
    "dimensions" => ":Attribute hat ungültige Bildabmessungen.",
    "distinct" => ":Attribute beinhaltet einen bereits vorhandenen Wert.",
    "doesnt_end_with" => ":Attribute darf nicht mit einem der folgenden enden: :values.",
    "doesnt_start_with" => ":Attribute darf nicht mit einem der folgenden beginnen: :values.",
    "email" => ":Attribute muss eine gültige E-Mail-Adresse sein.",
    "ends_with" => ":Attribute muss eine der folgenden Endungen aufweisen: :values",
    "enum" => "Der ausgewählte Wert ist ungültig.",
    "exists" => "Der gewählte Wert für :attribute ist ungültig.",
    "failed" => "Diese Kombination aus Zugangsdaten wurde nicht in unserer Datenbank gefunden.",
    "file" => ":Attribute muss eine Datei sein.",
    "filled" => ":Attribute muss ausgefüllt sein.",
    "gt.array" => ":Attribute muss mehr als :value Elemente haben.",
    "gt.file" => ":Attribute muss größer als :value Kilobytes sein.",
    "gt.numeric" => ":Attribute muss größer als :value sein.",
    "gt.string" => ":Attribute muss länger als :value Zeichen sein.",
    "gte.array" => ":Attribute muss mindestens :value Elemente haben.",
    "gte.file" => ":Attribute muss größer oder gleich :value Kilobytes sein.",
    "gte.numeric" => ":Attribute muss größer oder gleich :value sein.",
    "gte.string" => ":Attribute muss mindestens :value Zeichen lang sein.",
    "image" => ":Attribute muss ein Bild sein.",
    "in" => "Der gewählte Wert für :attribute ist ungültig.",
    "in_array" => "Der gewählte Wert für :attribute kommt nicht in :other vor.",
    "incorrect" => ":Attribute ist nicht korrekt.",
    "integer" => ":Attribute muss eine ganze Zahl sein.",
    "ip" => ":Attribute muss eine gültige IP-Adresse sein.",
    "ipv4" => ":Attribute muss eine gültige IPv4-Adresse sein.",
    "ipv6" => ":Attribute muss eine gültige IPv6-Adresse sein.",
    "json" => ":Attribute muss ein gültiger JSON-String sein.",
    "lt.array" => ":Attribute muss weniger als :value Elemente haben.",
    "lt.file" => ":Attribute muss kleiner als :value Kilobytes sein.",
    "lt.numeric" => ":Attribute muss kleiner als :value sein.",
    "lt.string" => ":Attribute muss kürzer als :value Zeichen sein.",
    "lte.array" => ":Attribute darf maximal :value Elemente haben.",
    "lte.file" => ":Attribute muss kleiner oder gleich :value Kilobytes sein.",
    "lte.numeric" => ":Attribute muss kleiner oder gleich :value sein.",
    "lte.string" => ":Attribute darf maximal :value Zeichen lang sein.",
    "mac_address" => "Der Wert muss eine gültige MAC-Adresse sein.",
    "max.array" => ":Attribute darf maximal :max Elemente haben.",
    "max.file" => ":Attribute darf maximal :max Kilobytes groß sein.",
    "max.numeric" => ":Attribute darf maximal :max sein.",
    "max.string" => ":Attribute darf maximal :max Zeichen haben.",
    "mimes" => ":Attribute muss den Dateityp :values haben.",
    "mimetypes" => ":Attribute muss den Dateityp :values haben.",
    "min.array" => ":Attribute muss mindestens :min Elemente haben.",
    "min.file" => ":Attribute muss mindestens :min Kilobytes groß sein.",
    "min.numeric" => ":Attribute muss mindestens :min sein.",
    "min.string" => ":Attribute muss mindestens :min Zeichen lang sein.",
    "multiple_of" => ":Attribute muss ein Vielfaches von :value sein.",
    "next" => "Weiter &raquo;",
    "not_in" => "Der gewählte Wert für :attribute ist ungültig.",
    "not_regex" => ":Attribute hat ein ungültiges Format.",
    "numeric" => ":Attribute muss eine Zahl sein.",
    "password" => "Das Passwort ist falsch.",
    "password.letters" => ":Attribute muss mindestens einen Buchstaben beinhalten.",
    "password.mixed" => ":Attribute muss mindestens einen Großbuchstaben und einen Kleinbuchstaben beinhalten.",
    "password.numbers" => ":Attribute muss mindestens eine Zahl beinhalten.",
    "password.symbols" => ":Attribute muss mindestens ein Sonderzeichen beinhalten.",
    "password.uncompromised" => ":Attribute wurde in einem Datenleck gefunden. Bitte wählen Sie ein anderes :attribute.",
    "present" => ":Attribute muss vorhanden sein.",
    "previous" => "&laquo; Zurück",
    "prohibited" => ":Attribute ist unzulässig.",
    "prohibited_if" => ":Attribute ist unzulässig, wenn :other :value ist.",
    "prohibited_unless" => ":Attribute ist unzulässig, wenn :other nicht :values ist.",
    "prohibits" => ":Attribute verbietet die Angabe von :other.",
    "regex" => "Format von :Attribute ist ungültig.",
    "relatable" => ":Attribute kann nicht mit dieser Ressource verbunden werden.",
    "required" => ":Attribute muss ausgefüllt werden.",
    "required_choose" => ":Attribute muss ausgewählt werden.",
    "required_array_keys" => "Dieses Feld muss Einträge enthalten für: :values.",
    "required_if" => ":Attribute muss ausgefüllt werden, wenn :other den Wert :value hat.",
    "required_unless" => ":Attribute muss ausgefüllt werden, wenn :other nicht den Wert :values hat.",
    "required_with" => ":Attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.",
    "required_with_all" => ":Attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.",
    "required_without" => ":Attribute muss ausgefüllt werden, wenn :values nicht ausgefüllt wurde.",
    "required_without_all" => ":Attribute muss ausgefüllt werden, wenn keines der Felder :values ausgefüllt wurde.",
    "reset" => "Das Passwort wurde zurückgesetzt!",
    "same" => ":Attribute und :other müssen übereinstimmen.",
    "sent" => "Passworterinnerung wurde gesendet!",
    "size.array" => ":Attribute muss genau :size Elemente haben.",
    "size.file" => ":Attribute muss :size Kilobyte groß sein.",
    "size.numeric" => ":Attribute muss gleich :size sein.",
    "size.string" => ":Attribute muss :size Zeichen lang sein.",
    "starts_with" => ":Attribute muss mit einem der folgenden Anfänge aufweisen: :values",
    "string" => ":Attribute muss eine Zeichenkette sein.",
    "throttle" => "Zu viele Loginversuche. Versuchen Sie es bitte in :seconds Sekunden nochmal.",
    "throttled" => "Bitte warten Sie, bevor Sie es erneut versuchen.",
    "timezone" => ":Attribute muss eine gültige Zeitzone sein.",
    "token" => "Der Passwort-Wiederherstellungs-Schlüssel ist ungültig oder abgelaufen.",
    "unique" => ":Attribute ist bereits vergeben.",
    "uploaded" => ":Attribute konnte nicht hochgeladen werden.",
    "url" => ":Attribute muss eine URL sein.",
    "user" => "Es konnte leider kein Nutzer mit dieser E-Mail-Adresse gefunden werden.",
    "uuid" => ":Attribute muss ein UUID sein.",

    "surely_exists" => "Solch ein Eintrag existiert bereits",
    "maybe_exists" => "Solch ein Eintrag könnte bereits existieren: :candidates",
    "override" => "Trotzdem eintragen?",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    //'custom' => [
    //    'attribute-name' => [
    //        'rule-name' => 'custom-message',
    //    ],
    //],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'inhabitant_id' => 'Bewohner:in',
        'name' => 'Name',
        'surname' => 'Nachname',
        'comment' => 'Kommentar',
        'origin' => 'Heimatort',
        'subject' => 'Studienfach',
        'email' => 'E-Mail',
        'email_public' => 'E-Mail öffentlich',
        'phone' => 'HandyNr.',

        'password' => 'Passwort',
        'key' => 'Schlüssel für sensible Daten in der Datenbank',

        'date_in' => 'Einzugsdatum',
        'date_out' => 'Auszugsdatum',

        'mac_address' => 'Mac-Adresse',
        'vlan_id' => 'Vlan'
    ],

];

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            DROP TRIGGER IF EXISTS after_insert_metri_design_posts;
            CREATE TRIGGER after_insert_metri_design_posts
            AFTER INSERT ON metri_design_posts
            FOR EACH ROW
            BEGIN
                INSERT INTO projects (title, slug, content, image, service_type, service_id, created_at) 
                VALUES (NEW.title, NEW.slug, NEW.content, NEW.image, "metri_design_posts", NEW.id, NEW.created_at);
            END
        ');

        DB::unprepared('
            DROP TRIGGER IF EXISTS after_insert_metri_digital_posts;
            CREATE TRIGGER after_insert_metri_digital_posts
            AFTER INSERT ON metri_digital_posts
            FOR EACH ROW
            BEGIN
                INSERT INTO projects (title, slug, content, image, service_type, service_id, created_at) 
                VALUES (NEW.title, NEW.slug, NEW.content, NEW.image, "metri_digital_posts", NEW.id, NEW.created_at);
            END
        ');

        DB::unprepared('
            DROP TRIGGER IF EXISTS after_insert_metri_entertainment_posts;
            CREATE TRIGGER after_insert_metri_entertainment_posts
            AFTER INSERT ON metri_entertainment_posts
            FOR EACH ROW
            BEGIN
                INSERT INTO projects (title, slug, content, image, service_type, service_id, created_at) 
                VALUES (NEW.title, NEW.slug, NEW.content, NEW.image, "metri_entertainment_posts", NEW.id, NEW.created_at);
            END
        ');

        DB::unprepared('
            DROP TRIGGER IF EXISTS after_insert_metri_event_posts;
            CREATE TRIGGER after_insert_metri_event_posts
            AFTER INSERT ON metri_event_posts
            FOR EACH ROW
            BEGIN
                INSERT INTO projects (title, slug, content, image, service_type, service_id, created_at) 
                VALUES (NEW.title, NEW.slug, NEW.content, NEW.image, "metri_event_posts", NEW.id, NEW.created_at);
            END
        ');

        DB::unprepared('
            DROP TRIGGER IF EXISTS after_insert_metri_film_equipment_posts;
            CREATE TRIGGER after_insert_metri_film_equipment_posts
            AFTER INSERT ON metri_film_equipment_posts
            FOR EACH ROW
            BEGIN
                INSERT INTO projects (title, slug, content, image, service_type, service_id, created_at) 
                VALUES (NEW.title, NEW.slug, NEW.content, NEW.image, "metri_film_equipment_posts", NEW.id, NEW.created_at);
            END
        ');

        DB::unprepared('
            DROP TRIGGER IF EXISTS after_insert_metri_film_posts;
            CREATE TRIGGER after_insert_metri_film_posts
            AFTER INSERT ON metri_film_posts
            FOR EACH ROW
            BEGIN
                INSERT INTO projects (title, slug, content, image, service_type, service_id, created_at) 
                VALUES (NEW.title, NEW.slug, NEW.content, NEW.image, "metri_film_posts", NEW.id, NEW.created_at);
            END
        ');

        DB::unprepared('
            DROP TRIGGER IF EXISTS after_insert_metri_post_posts;
            CREATE TRIGGER after_insert_metri_post_posts
            AFTER INSERT ON metri_post_posts
            FOR EACH ROW
            BEGIN
                INSERT INTO projects (title, slug, content, image, service_type, service_id, created_at) 
                VALUES (NEW.title, NEW.slug, NEW.content, NEW.image, "metri_post_posts", NEW.id, NEW.created_at);
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_metri_design_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_metri_digital_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_metri_entertainment_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_metri_event_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_metri_film_equipment_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_metri_film_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_metri_post_posts');
    }
};

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
        // UPDATE untuk metri_design_posts
        DB::unprepared('
            CREATE TRIGGER after_update_metri_design_posts
            AFTER UPDATE ON metri_design_posts
            FOR EACH ROW
            BEGIN
                UPDATE projects 
                SET title = NEW.title, slug = NEW.slug, content = NEW.content, image = NEW.image, created_at = NEW.created_at
                WHERE service_id = NEW.id AND service_type = "metri_design_posts";
            END
        ');

        // UPDATE untuk metri_digital_posts
        DB::unprepared('
            CREATE TRIGGER after_update_metri_digital_posts
            AFTER UPDATE ON metri_digital_posts
            FOR EACH ROW
            BEGIN
                UPDATE projects 
                SET title = NEW.title, slug = NEW.slug, content = NEW.content, image = NEW.image, created_at = NEW.created_at
                WHERE service_id = NEW.id AND service_type = "metri_digital_posts";
            END
        ');

        // UPDATE untuk metri_entertainment_posts
        DB::unprepared('
            CREATE TRIGGER after_update_metri_entertainment_posts
            AFTER UPDATE ON metri_entertainment_posts
            FOR EACH ROW
            BEGIN
                UPDATE projects 
                SET title = NEW.title, slug = NEW.slug, content = NEW.content, image = NEW.image, created_at = NEW.created_at
                WHERE service_id = NEW.id AND service_type = "metri_entertainment_posts";
            END
        ');

        // UPDATE untuk metri_event_posts
        DB::unprepared('
            CREATE TRIGGER after_update_metri_event_posts
            AFTER UPDATE ON metri_event_posts
            FOR EACH ROW
            BEGIN
                UPDATE projects 
                SET title = NEW.title, slug = NEW.slug, content = NEW.content, image = NEW.image, created_at = NEW.created_at
                WHERE service_id = NEW.id AND service_type = "metri_event_posts";
            END
        ');

        // UPDATE untuk metri_film_equipment_posts
        DB::unprepared('
            CREATE TRIGGER after_update_metri_film_equipment_posts
            AFTER UPDATE ON metri_film_equipment_posts
            FOR EACH ROW
            BEGIN
                UPDATE projects 
                SET title = NEW.title, slug = NEW.slug, content = NEW.content, image = NEW.image, created_at = NEW.created_at
                WHERE service_id = NEW.id AND service_type = "metri_film_equipment_posts";
            END
        ');

        // UPDATE untuk metri_film_posts
        DB::unprepared('
            CREATE TRIGGER after_update_metri_film_posts
            AFTER UPDATE ON metri_film_posts
            FOR EACH ROW
            BEGIN
                UPDATE projects 
                SET title = NEW.title, slug = NEW.slug, content = NEW.content, image = NEW.image, created_at = NEW.created_at
                WHERE service_id = NEW.id AND service_type = "metri_film_posts";
            END
        ');

        // UPDATE untuk metri_post_posts
        DB::unprepared('
            CREATE TRIGGER after_update_metri_post_posts
            AFTER UPDATE ON metri_post_posts
            FOR EACH ROW
            BEGIN
                UPDATE projects 
                SET title = NEW.title, slug = NEW.slug, content = NEW.content, image = NEW.image, created_at = NEW.created_at
                WHERE service_id = NEW.id AND service_type = "metri_post_posts";
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_update_metri_design_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_update_metri_digital_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_update_metri_entertainment_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_update_metri_event_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_update_metri_film_equipment_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_update_metri_film_posts');
        DB::unprepared('DROP TRIGGER IF EXISTS after_update_metri_post_posts');
    }
};

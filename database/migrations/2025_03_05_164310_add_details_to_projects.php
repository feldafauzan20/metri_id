<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'client_name')) {
                $table->string('client_name')->nullable();
            }
            if (!Schema::hasColumn('projects', 'year')) {
                $table->year('year')->nullable();
            }
            if (!Schema::hasColumn('projects', 'category')) {
                $table->string('category')->nullable();
            }
            if (!Schema::hasColumn('projects', 'industry')) {
                $table->string('industry')->nullable();
            }
            if (!Schema::hasColumn('projects', 'concept')) {
                $table->text('concept')->nullable();
            }
            if (!Schema::hasColumn('projects', 'objective')) {
                $table->text('objective')->nullable();
            }
            if (!Schema::hasColumn('projects', 'challenge')) {
                $table->text('challenge')->nullable();
            }
            if (!Schema::hasColumn('projects', 'results')) {
                $table->text('results')->nullable();
            }
            if (!Schema::hasColumn('projects', 'video')) {
                $table->string('video')->nullable();
            }
            if (!Schema::hasColumn('projects', 'gambar_1')) {
                $table->string('gambar_1')->nullable();
            }
            if (!Schema::hasColumn('projects', 'gambar_2')) {
                $table->string('gambar_2')->nullable();
            }
            if (!Schema::hasColumn('projects', 'gambar_3')) {
                $table->string('gambar_3')->nullable();
            }
            if (!Schema::hasColumn('projects', 'gambar_4')) {
                $table->string('gambar_4')->nullable();
            }
            if (!Schema::hasColumn('projects', 'gambar_5')) {
                $table->string('gambar_5')->nullable();
            }
            if (!Schema::hasColumn('projects', 'link')) {
                $table->string('link')->nullable();
            }
        });

        $services = [
            'metri_design_posts',
            'metri_digital_posts',
            'metri_entertainment_posts',
            'metri_event_posts',
            'metri_film_equipment_posts',
            'metri_film_posts',
            'metri_post_posts',
        ];

        foreach ($services as $service) {
            DB::unprepared("
                CREATE TRIGGER after_insert_{$service}
                AFTER INSERT ON {$service}
                FOR EACH ROW
                BEGIN
                    INSERT INTO projects (
                        title, slug, content, client_name, year, category, industry, concept, objective, challenge, results, video, image,
                        gambar_1, gambar_2, gambar_3, gambar_4, gambar_5, link, service_id, service_type, created_at, updated_at
                    ) VALUES (
                        NEW.title, NEW.slug, NEW.content, NEW.client_name, NEW.year, NEW.category, NEW.industry, NEW.concept, NEW.objective, 
                        NEW.challenge, NEW.results, NEW.video, NEW.image, NEW.gambar_1, NEW.gambar_2, NEW.gambar_3, NEW.gambar_4, NEW.gambar_5, 
                        NEW.link, NEW.id, '{$service}', NEW.created_at, NEW.updated_at
                    );
                END;
            ");

            DB::unprepared("
                CREATE TRIGGER after_update_{$service}
                AFTER UPDATE ON {$service}
                FOR EACH ROW
                BEGIN
                    UPDATE projects 
                    SET 
                        title = NEW.title,
                        slug = NEW.slug,
                        content = NEW.content,
                        client_name = NEW.client_name,
                        year = NEW.year,
                        category = NEW.category,
                        industry = NEW.industry,
                        concept = NEW.concept,
                        objective = NEW.objective,
                        challenge = NEW.challenge,
                        results = NEW.results,
                        video = NEW.video,
                        image = NEW.image,
                        gambar_1 = NEW.gambar_1,
                        gambar_2 = NEW.gambar_2,
                        gambar_3 = NEW.gambar_3,
                        gambar_4 = NEW.gambar_4,
                        gambar_5 = NEW.gambar_5,
                        link = NEW.link,
                        updated_at = NEW.updated_at
                    WHERE service_id = NEW.id AND service_type = '{$service}';
                END;
            ");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $columns = ['client_name', 'year', 'category', 'industry', 'concept', 'objective', 'challenge', 'results', 'video',
                    'gambar_1', 'gambar_2', 'gambar_3', 'gambar_4', 'gambar_5', 'link'];

        Schema::table('projects', function (Blueprint $table) use ($columns) {
            foreach ($columns as $column) {
                if (Schema::hasColumn('projects', $column)) {
                    $table->dropColumn($column);
                }
            }
        });

        $services = [
            'metri_design_posts',
            'metri_digital_posts',
            'metri_entertainment_posts',
            'metri_event_posts',
            'metri_film_equipment_posts',
            'metri_film_posts',
            'metri_post_posts',
        ];

        foreach ($services as $service) {
            DB::unprepared("DROP TRIGGER IF EXISTS after_insert_{$service}");
            DB::unprepared("DROP TRIGGER IF EXISTS after_update_{$service}");
        }
    }
};
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'publication_year' => 2008,
                'genre' => 'Programming',
                'library_id' => 1
            ],
            [
                'title' => 'The Pragmatic Programmer',
                'author' => 'Andrew Hunt, David Thomas',
                'publication_year' => 1999,
                'genre' => 'Programming',
                'library_id' => 2
            ],
            [
                'title' => 'Design Patterns',
                'author' => 'Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides',
                'publication_year' => 1994,
                'genre' => 'Software Engineering',
                'library_id' => 3
            ],
            [
                'title' => 'Introduction to Algorithms',
                'author' => 'Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein',
                'publication_year' => 2009,
                'genre' => 'Computer Science',
                'library_id' => 4
            ],
            [
                'title' => 'The Clean Coder',
                'author' => 'Robert C. Martin',
                'publication_year' => 2011,
                'genre' => 'Programming',
                'library_id' => 5
            ],
            [
                'title' => 'Refactoring',
                'author' => 'Martin Fowler',
                'publication_year' => 1999,
                'genre' => 'Programming',
                'library_id' => 6
            ],
            [
                'title' => 'Code Complete',
                'author' => 'Steve McConnell',
                'publication_year' => 2004,
                'genre' => 'Programming',
                'library_id' => 7
            ],
            [
                'title' => 'The Art of Computer Programming',
                'author' => 'Donald E. Knuth',
                'publication_year' => 1968,
                'genre' => 'Algorithms',
                'library_id' => 8
            ],
            [
                'title' => 'Design It!',
                'author' => 'Michael Keeling',
                'publication_year' => 2017,
                'genre' => 'Software Design',
                'library_id' => 9
            ]
        ]);
    }
}

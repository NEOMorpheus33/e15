<?php 

namespace App\Models;  
namespace App; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Author extends Model
{ 
    use HasFactory;
}

class Author extends Model {

    public function books()
    {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('App\Models\Book');
    }

    public function author()
    {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Models\Author');
    } 
    //* Associate Author with a book *//  
    
    

 

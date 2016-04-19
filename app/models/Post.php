<?php



class Post extends BaseModel
{
    
	public static $rules = array(
    'title'      => 'required|max:100|',
    'body'       => 'required|max:10000|',
    'image'		 => 'max:300000|mimes:jpeg,png,gif'	
);


    protected $table = 'posts';


    public function user()
	{
    	return $this->belongsTo('User');
	}

	public function isAuthor(User $user)
	{
		return $this->user_id == $user->id;
	}

}
<?php
declare(strict_types = 1);
class Blog
{

    /**
     * Returns single blog item with specified id
     * @param integer $id
     */
    public static function getBlogItemById(int $id):int
    {
        $id = intval($id);

        if ($id) {
                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM blog WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            $blogItem = $result->fetch();

            return $blogItem;
        }
    }

    /**
     * Returns an array of blog items
     */
    public static function getBlogList():array {
 
        $db = Db::getConnection();
        
        $blogList = array();
        
        $result = $db->query('SELECT id, title, date, short_content '
                . 'FROM blog '
                . 'ORDER BY date DESC ');

        $i = 0;

        while($row = $result->fetch()) {
            $blogList[$i]['id'] = $row['id'];
            $blogList[$i]['title'] = $row['title'];
            $blogList[$i]['date'] = $row['date'];
            $blogList[$i]['short_content'] = $row['short_content'];
            $i++;

        }

        return $blogList;
    }


}

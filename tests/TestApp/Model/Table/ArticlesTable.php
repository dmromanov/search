<?php
namespace Search\Test\TestApp\Model\Table;

use Cake\ORM\Table;
use Search\Manager;

/**
 * @mixin \Search\Model\Behavior\SearchBehavior
 */
class ArticlesTable extends Table
{

    public function initialize(array $config)
    {
        $this->addBehavior('Search.Search');

        $this->searchManager()
            ->value('foo')
            ->like('search', ['filterEmpty' => true])
            ->value('baz')
            ->value('group', ['field' => 'Articles.group']);
    }
}

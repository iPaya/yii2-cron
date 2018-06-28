<?php

namespace iPaya\Cron\Models;

/**
 * This is the ActiveQuery class for [[Cron]].
 *
 * @see Cron
 */
class CronQuery extends \yii\db\ActiveQuery
{
    /**
     * @return CronQuery
     */
    public function enabled()
    {
        return $this->andWhere([
            '[[enabled]]' => 1,
        ]);
    }

    /**
     * @return CronQuery
     */
    public function disabled()
    {
        return $this->andWhere([
            '[[enabled]]' => 0,
        ]);
    }

    /**
     * {@inheritdoc}
     * @return Cron[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cron|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

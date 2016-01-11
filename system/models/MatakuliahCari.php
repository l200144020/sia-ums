<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Matakuliah;

/**
 * MatakuliahCari represents the model behind the search form about `app\models\Matakuliah`.
 */
class MatakuliahCari extends Matakuliah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'semester', 'dosen_id', 'kelas_id', 'ruang_id'], 'integer'],
            [['nama', 'jam'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Matakuliah::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'semester' => $this->semester,
            'dosen_id' => $this->dosen_id,
            'kelas_id' => $this->kelas_id,
            'ruang_id' => $this->ruang_id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jam', $this->jam]);

        return $dataProvider;
    }
}

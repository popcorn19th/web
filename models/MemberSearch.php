<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Member;

/**
 * MemberSearch represents the model behind the search form about `app\models\Member`.
 */
class MemberSearch extends Member
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'age'], 'integer'],
            [['photo', 'username', 'password', 'student_id', 'citizen_id', 'prefix_id', 'firstname', 'lastname', 'nickname', 'birthday', 'gender', 'graduate_year', 'generation', 'occupation', 'position', 'status_id', 'study', 'level', 'class', 'address', 'work', 'email', 'tel', 'create_date'], 'safe'],
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
        $query = Member::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'birthday' => $this->birthday,
            'age' => $this->age,
            'create_date' => $this->create_date,
        ]);

        $query->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'student_id', $this->student_id])
            ->andFilterWhere(['like', 'citizen_id', $this->citizen_id])
            ->andFilterWhere(['like', 'prefix_id', $this->prefix_id])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'graduate_year', $this->graduate_year])
            ->andFilterWhere(['like', 'generation', $this->generation])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'status_id', $this->status_id])
            ->andFilterWhere(['like', 'study', $this->study])
            ->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'work', $this->work])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'tel', $this->tel]);

        return $dataProvider;
    }
}

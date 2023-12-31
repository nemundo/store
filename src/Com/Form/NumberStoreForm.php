<?phpnamespace Nemundo\Store\Com\Form;use Nemundo\Admin\Com\ListBox\AdminNumberBox;use Nemundo\Core\Validation\ValidationType;use Nemundo\Package\Bootstrap\FormElement\BootstrapTextBox;use Nemundo\Store\Type\AbstractNumberStoreType;class NumberStoreForm extends AbstractStoreForm{    /**     * @var AbstractNumberStoreType     */    public $store;    /**     * @var AdminNumberBox     */    private $number;    public function getContent()    {        $this->number = new AdminNumberBox($this);        $this->number->label = $this->store->storeLabel;        $this->number->value = $this->store->getValue();        $this->number->validation = true;        $this->number->validationType = ValidationType::IS_NUMBER;        return parent::getContent();    }    protected function getStoreValue()    {       // $value = $this->number->getValue();       // return $value;    }    protected function onSubmit()    {        $this->store->setValue($this->number->getValue());    }}
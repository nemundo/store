<?phpnamespace Nemundo\Store\Com\Button;use Nemundo\Admin\Com\Button\AdminIconSiteButton;use Nemundo\Admin\Com\Button\AdminSiteButton;use Nemundo\Store\Parameter\StoreParameter;use Nemundo\Store\Site\TextStoreEditSite;use Nemundo\Store\Type\AbstractTextStoreType;class TextStoreSiteButton extends AdminIconSiteButton  // AdminSiteButton{    /**     * @var AbstractTextStoreType     */    public $store;    /*    protected function loadContainer()    {        parent::loadContainer();        $this->content = 'edit';    }*/    public function getContent()    {        $this->site = TextStoreEditSite::$site;        $this->site->addParameter(new StoreParameter($this->store->storeId));        return parent::getContent();    }}
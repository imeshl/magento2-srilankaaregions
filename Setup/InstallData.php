<?php
/**
* Copyright (C) 2017
* You should have received a copy of the GNU General Public License
* along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

namespace AloftConsultancy\SriLankaRegions\Setup;

use Magento\Directory\Helper\Data;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
/**
 * Directory data
 *
 * @var Data
 */
private $directoryData;

    /**
     * Init
     *
     * @param Data $directoryData
     */
    public function __construct(Data $directoryData)
    {
        $this->directoryData = $directoryData;
    }

/**
 * {@inheritdoc}
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
public function install(
    ModuleDataSetupInterface $setup,
    ModuleContextInterface $context
) {

    /**
     * Fill table directory/country_region
     * Fill table directory/country_region_name for en_US locale
     */
    $data = [
        ['LK','LK-1','Colombo 01'],
        ['LK','LK-2','Colombo 02'],
        ['LK','LK-3','Colombo 03'],
        ['LK','LK-4','Colombo 04'],
        ['LK','LK-5','Colombo 05'],
        ['LK','LK-6','Colombo 06'],
        ['LK','LK-7','Colombo 07'],
        ['LK','LK-8','Colombo 08'],
        ['LK','LK-9','Colombo 09'],
        ['LK','LK-10','Colombo 10'],
        ['LK','LK-11','Colombo 11'],
        ['LK','LK-12','Colombo 12'],
        ['LK','LK-13','Colombo 13'],
        ['LK','LK-14','Colombo 14'],
        ['LK','LK-15','Colombo 15'],
        ['LK','LK-16','Attidiya'],
        ['LK','LK-17','Battaramulla'],
        ['LK','LK-18','Beddagana'],
        ['LK','LK-19','Bellanwila'],
        ['LK','LK-20','Bokundara'],
        ['LK','LK-21','Borelesgamuwa'],
        ['LK','LK-22','Dehiwala'],
        ['LK','LK-23','Delkanda'],
        ['LK','LK-24','Embuldeniya'],
        ['LK','LK-25','Gangodawila'],
        ['LK','LK-26','Hendala'],
        ['LK','LK-27','Kalubowila'],
        ['LK','LK-28','Kawdana'],
        ['LK','LK-29','Kiribathgoda'],
        ['LK','LK-30','Kotte'],
        ['LK','LK-31','Mahabage'],
        ['LK','LK-32','Maharagama'],
        ['LK','LK-33','Mt. Lavinia'],
        ['LK','LK-34','Nadimala'],
        ['LK','LK-35','Nawala'],
        ['LK','LK-36','Nawinna'],
        ['LK','LK-37','Nugegoda'],
        ['LK','LK-38','Obesekarapura'],
        ['LK','LK-39','Orugodawatta'],
        ['LK','LK-40','Pelawatte'],
        ['LK','LK-41','Peliyagoda'],
        ['LK','LK-42','Pepilyana'],
        ['LK','LK-43','Rajagiriya'],
        ['LK','LK-44','Ratmalana'],
        ['LK','LK-45','Thalangama'],
        ['LK','LK-46','Thalawatugoda'],
        ['LK','LK-47','Udahamulla'],
        ['LK','LK-48','Werahera'],
        ['LK','LK-49','Alubomulla'],
        ['LK','LK-50','Angoda'],
        ['LK','LK-51','Angulana'],
        ['LK','LK-52','Athurugiriya'],
        ['LK','LK-53','Bandaragama'],
        ['LK','LK-54','Biyagama'],
        ['LK','LK-55','Egoda Uyana'],
        ['LK','LK-56','Gampaha'],
        ['LK','LK-57','Ganemulla'],
        ['LK','LK-58','Godagama'],
        ['LK','LK-59','Gokarana'],
        ['LK','LK-60','Gothatuwa'],
        ['LK','LK-61','Hanwella'],
        ['LK','LK-62','Himbutana'],
        ['LK','LK-63','Hokandara'],
        ['LK','LK-64','Homagama'],
        ['LK','LK-65','Ja Ela'],
        ['LK','LK-66','Kadawatha'],
        ['LK','LK-67','Kahathuduwa'],
        ['LK','LK-68','Kandana'],
        ['LK','LK-69','Katubedda'],
        ['LK','LK-70','Katunayake'],
        ['LK','LK-71','Kelaniya'],
        ['LK','LK-72','Kesbawa'],
        ['LK','LK-73','Kollonawa'],
        ['LK','LK-74','Kotikawatta'],
        ['LK','LK-75','Kottawa'],
        ['LK','LK-76','Lunawa'],
        ['LK','LK-77','Mabole'],
        ['LK','LK-78','Malabe'],
        ['LK','LK-79','Mawaramandiya'],
        ['LK','LK-80','Meegoda'],
        ['LK','LK-81','Moratuwa'],
        ['LK','LK-82','Mulleriyawa'],
        ['LK','LK-83','Negombo'],
        ['LK','LK-84','Padukka'],
        ['LK','LK-85','Panadura'],
        ['LK','LK-86','Pannipitiya'],
        ['LK','LK-87','Piliyandala'],
        ['LK','LK-88','Ragama'],
        ['LK','LK-89','Ranala'],
        ['LK','LK-90','Sapugaskanda'],
        ['LK','LK-91','Sedawatte'],
        ['LK','LK-92','Seeduwa'],
        ['LK','LK-93','Siyambalape'],
        ['LK','LK-94','Veyangoda'],
        ['LK','LK-95','Wadduwa'],
        ['LK','LK-96','Wellampitiya'],
        ['LK','LK-97','Alawwa'],
        ['LK','LK-98','Aluthgama'],
        ['LK','LK-99','Ambalantota'],
        ['LK','LK-100','Anuradhapura'],
        ['LK','LK-101','Avissawela'],
        ['LK','LK-102','Badulla'],
        ['LK','LK-103','Balapitiya'],
        ['LK','LK-104','Bandarawela'],
        ['LK','LK-105','Batticaloa'],
        ['LK','LK-106','Beruwala'],
        ['LK','LK-107','Chilaw'],
        ['LK','LK-108','Dambulla'],
        ['LK','LK-109','Dankotuwa'],
        ['LK','LK-110','Dickwella'],
        ['LK','LK-111','Delgoda'],
        ['LK','LK-112','Divulapitiya'],
        ['LK','LK-113','Eheliyagoda'],
        ['LK','LK-114','Embilipitiya'],
        ['LK','LK-115','Galle'],
        ['LK','LK-116','Gampola'],
        ['LK','LK-117','Giriulla'],
        ['LK','LK-118','Hambantota'],
        ['LK','LK-119','Hatton'],
        ['LK','LK-120','Hikkaduwa'],
        ['LK','LK-121','Hingurakgoda'],
        ['LK','LK-122','Horana'],
        ['LK','LK-123','Ingiriya'],
        ['LK','LK-124','Jaffna'],
        ['LK','LK-125','Kalutara'],
        ['LK','LK-126','Kandy'],
        ['LK','LK-127','Katugastota'],
        ['LK','LK-128','Kegalle'],
        ['LK','LK-129','Kilinochchi'],
        ['LK','LK-130','Kirindiwela'],
        ['LK','LK-131','Kuliyapitiya'],
        ['LK','LK-132','Kurunegala'],
        ['LK','LK-133','Malwana'],
        ['LK','LK-134','Matale'],
        ['LK','LK-135','Matara'],
        ['LK','LK-136','Mathugama'],
        ['LK','LK-137','Mawanella'],
        ['LK','LK-138','Medawachchiya'],
        ['LK','LK-139','Meerigama'],
        ['LK','LK-140','Minuwangoda'],
        ['LK','LK-141','Mirigama'],
        ['LK','LK-142','Narammala'],
        ['LK','LK-143','Nittambuwa'],
        ['LK','LK-144','Nuwara Eliya'],
        ['LK','LK-145','Pannala'],
        ['LK','LK-146','Pelmadulla'],
        ['LK','LK-147','Pilimithalawa'],
        ['LK','LK-148','Polgahawela'],
        ['LK','LK-149','Polonnaruwa'],
        ['LK','LK-150','Ratnapura'],
        ['LK','LK-151','Tangalle'],
        ['LK','LK-152','Trincomalee'],
        ['LK','LK-153','Udugampola'],
        ['LK','LK-154','Vavuniya'],
        ['LK','LK-155','Vayangoda'],
        ['LK','LK-156','Warakapola'],
        ['LK','LK-157','Weligama'],
        ['LK','LK-158','Weliweriya'],
        ['LK','LK-159','Wennappuwa'],
        ['LK','LK-160','Yakkala'],
        ['LK','LK-161','Agalawatte'],
        ['LK','LK-162','Ahangama'],
        ['LK','LK-163','Ampara'],
        ['LK','LK-164','Anggunakolapalassa'],
        ['LK','LK-165','Aralaganwila'],
        ['LK','LK-166','Baddegama'],
        ['LK','LK-167','Bakamuna'],
        ['LK','LK-168','Balangoda'],
        ['LK','LK-169','Batapola'],
        ['LK','LK-170','Bibile'],
        ['LK','LK-171','Dehiattakandiya'],
        ['LK','LK-172','Deniyaya'],
        ['LK','LK-173','Digana'],
        ['LK','LK-174','Elipitiya'],
        ['LK','LK-175','Galagedera'],
        ['LK','LK-176','Galewela'],
        ['LK','LK-177','Galgamuwa'],
        ['LK','LK-178','Habarana'],
        ['LK','LK-179','Hakmana'],
        ['LK','LK-180','Hali Ella'],
        ['LK','LK-181','Hasalaka'],
        ['LK','LK-182','Hettipola'],
        ['LK','LK-183','Horopathana'],
        ['LK','LK-184','Kahatagasdigiliya'],
        ['LK','LK-185','Kahawatte'],
        ['LK','LK-186','Kalawana'],
        ['LK','LK-187','Kamburupitiya'],
        ['LK','LK-188','Kantalai'],
        ['LK','LK-189','Kekirawa'],
        ['LK','LK-190','Kuruwita'],
        ['LK','LK-191','Mahiyangana'],
        ['LK','LK-192','Mannar'],
        ['LK','LK-193','Maskeliya'],
        ['LK','LK-194','Mawathagama'],
        ['LK','LK-195','Melsiripura'],
        ['LK','LK-196','Menikhinne'],
        ['LK','LK-197','Monaragala'],
        ['LK','LK-198','Mulaitivu'],
        ['LK','LK-199','Na Ula'],
        ['LK','LK-200','Naiwella'],
        ['LK','LK-201','Nikaweratiya'],
        ['LK','LK-202','Padiyathalawa'],
        ['LK','LK-203','Passara'],
        ['LK','LK-204','Pusselawa'],
        ['LK','LK-205','Puttalam'],
        ['LK','LK-206','Rambukkana'],
        ['LK','LK-207','Rikillagaskada'],
        ['LK','LK-208','Ruwanwella'],
        ['LK','LK-209','Talawakelle'],
        ['LK','LK-210','Thambettegama'],
        ['LK','LK-211','Tissamaharama'],
        ['LK','LK-212','Udhanna'],
        ['LK','LK-213','Udugama'],
        ['LK','LK-214','Wariyapola'],
        ['LK','LK-215','Wattegama'],
        ['LK','LK-216','Welimada'],
        ['LK','LK-217','Wellawaya']
    ];


    foreach ($data as $row) {
        $bind = ['country_id' => $row[0], 'code' => $row[1], 'default_name' => $row[2]];
        $setup->getConnection()->insert($setup->getTable('directory_country_region'), $bind);
        $regionId = $setup->getConnection()->lastInsertId($setup->getTable('directory_country_region'));

        $bind = ['locale' => 'en_US', 'region_id' => $regionId, 'name' => $row[2]];
        $setup->getConnection()->insert($setup->getTable('directory_country_region_name'), $bind);
    }

    $countries = $this->directoryData->getCountryCollection()->getCountriesWithRequiredStates();
    $setup->getConnection()->delete(
        $setup->getTable('core_config_data'),
        ['scope = ?' => 'default',
        'scope_id = ?' => 0,
        'path = ?' => Data::XML_PATH_STATES_REQUIRED
        ]
    );
    $setup->getConnection()->insert(
        $setup->getTable('core_config_data'),
        [
            'scope' => 'default',
            'scope_id' => 0,
            'path' => Data::XML_PATH_STATES_REQUIRED,
            'value' => implode(',', array_keys($countries))
        ]
    );
}
}

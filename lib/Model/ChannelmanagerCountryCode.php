<?php
/**
 * ChannelmanagerCountryCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\ChannelManager
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Channel Manager Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\ChannelManager\Model;
use \GeminiCommerce\ChannelManager\ObjectSerializer;

/**
 * ChannelmanagerCountryCode Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\ChannelManager
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelmanagerCountryCode
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'COUNTRY_CODE_UNKNOWN';

    public const AD = 'COUNTRY_CODE_AD';

    public const AE = 'COUNTRY_CODE_AE';

    public const AF = 'COUNTRY_CODE_AF';

    public const AG = 'COUNTRY_CODE_AG';

    public const AI = 'COUNTRY_CODE_AI';

    public const AL = 'COUNTRY_CODE_AL';

    public const AM = 'COUNTRY_CODE_AM';

    public const AO = 'COUNTRY_CODE_AO';

    public const AQ = 'COUNTRY_CODE_AQ';

    public const AR = 'COUNTRY_CODE_AR';

    public const _AS = 'COUNTRY_CODE_AS';

    public const AT = 'COUNTRY_CODE_AT';

    public const AU = 'COUNTRY_CODE_AU';

    public const AW = 'COUNTRY_CODE_AW';

    public const AX = 'COUNTRY_CODE_AX';

    public const AZ = 'COUNTRY_CODE_AZ';

    public const BA = 'COUNTRY_CODE_BA';

    public const BB = 'COUNTRY_CODE_BB';

    public const BD = 'COUNTRY_CODE_BD';

    public const BE = 'COUNTRY_CODE_BE';

    public const BF = 'COUNTRY_CODE_BF';

    public const BG = 'COUNTRY_CODE_BG';

    public const BH = 'COUNTRY_CODE_BH';

    public const BI = 'COUNTRY_CODE_BI';

    public const BJ = 'COUNTRY_CODE_BJ';

    public const BL = 'COUNTRY_CODE_BL';

    public const BM = 'COUNTRY_CODE_BM';

    public const BN = 'COUNTRY_CODE_BN';

    public const BO = 'COUNTRY_CODE_BO';

    public const BQ = 'COUNTRY_CODE_BQ';

    public const BR = 'COUNTRY_CODE_BR';

    public const BS = 'COUNTRY_CODE_BS';

    public const BT = 'COUNTRY_CODE_BT';

    public const BV = 'COUNTRY_CODE_BV';

    public const BW = 'COUNTRY_CODE_BW';

    public const BY = 'COUNTRY_CODE_BY';

    public const BZ = 'COUNTRY_CODE_BZ';

    public const CA = 'COUNTRY_CODE_CA';

    public const CC = 'COUNTRY_CODE_CC';

    public const CD = 'COUNTRY_CODE_CD';

    public const CF = 'COUNTRY_CODE_CF';

    public const CG = 'COUNTRY_CODE_CG';

    public const CH = 'COUNTRY_CODE_CH';

    public const CI = 'COUNTRY_CODE_CI';

    public const CK = 'COUNTRY_CODE_CK';

    public const CL = 'COUNTRY_CODE_CL';

    public const CM = 'COUNTRY_CODE_CM';

    public const CN = 'COUNTRY_CODE_CN';

    public const CO = 'COUNTRY_CODE_CO';

    public const CR = 'COUNTRY_CODE_CR';

    public const CU = 'COUNTRY_CODE_CU';

    public const CV = 'COUNTRY_CODE_CV';

    public const CW = 'COUNTRY_CODE_CW';

    public const CX = 'COUNTRY_CODE_CX';

    public const CY = 'COUNTRY_CODE_CY';

    public const CZ = 'COUNTRY_CODE_CZ';

    public const DE = 'COUNTRY_CODE_DE';

    public const DJ = 'COUNTRY_CODE_DJ';

    public const DK = 'COUNTRY_CODE_DK';

    public const DM = 'COUNTRY_CODE_DM';

    public const _DO = 'COUNTRY_CODE_DO';

    public const DZ = 'COUNTRY_CODE_DZ';

    public const EC = 'COUNTRY_CODE_EC';

    public const EE = 'COUNTRY_CODE_EE';

    public const EG = 'COUNTRY_CODE_EG';

    public const EH = 'COUNTRY_CODE_EH';

    public const ER = 'COUNTRY_CODE_ER';

    public const ES = 'COUNTRY_CODE_ES';

    public const ET = 'COUNTRY_CODE_ET';

    public const FI = 'COUNTRY_CODE_FI';

    public const FJ = 'COUNTRY_CODE_FJ';

    public const FK = 'COUNTRY_CODE_FK';

    public const FM = 'COUNTRY_CODE_FM';

    public const FO = 'COUNTRY_CODE_FO';

    public const FR = 'COUNTRY_CODE_FR';

    public const GA = 'COUNTRY_CODE_GA';

    public const GB = 'COUNTRY_CODE_GB';

    public const GD = 'COUNTRY_CODE_GD';

    public const GE = 'COUNTRY_CODE_GE';

    public const GF = 'COUNTRY_CODE_GF';

    public const GG = 'COUNTRY_CODE_GG';

    public const GH = 'COUNTRY_CODE_GH';

    public const GI = 'COUNTRY_CODE_GI';

    public const GL = 'COUNTRY_CODE_GL';

    public const GM = 'COUNTRY_CODE_GM';

    public const GN = 'COUNTRY_CODE_GN';

    public const GP = 'COUNTRY_CODE_GP';

    public const GQ = 'COUNTRY_CODE_GQ';

    public const GR = 'COUNTRY_CODE_GR';

    public const GS = 'COUNTRY_CODE_GS';

    public const GT = 'COUNTRY_CODE_GT';

    public const GU = 'COUNTRY_CODE_GU';

    public const GW = 'COUNTRY_CODE_GW';

    public const GY = 'COUNTRY_CODE_GY';

    public const HK = 'COUNTRY_CODE_HK';

    public const HM = 'COUNTRY_CODE_HM';

    public const HN = 'COUNTRY_CODE_HN';

    public const HR = 'COUNTRY_CODE_HR';

    public const HT = 'COUNTRY_CODE_HT';

    public const HU = 'COUNTRY_CODE_HU';

    public const ID = 'COUNTRY_CODE_ID';

    public const IE = 'COUNTRY_CODE_IE';

    public const IL = 'COUNTRY_CODE_IL';

    public const IM = 'COUNTRY_CODE_IM';

    public const IN = 'COUNTRY_CODE_IN';

    public const IO = 'COUNTRY_CODE_IO';

    public const IQ = 'COUNTRY_CODE_IQ';

    public const IR = 'COUNTRY_CODE_IR';

    public const IS = 'COUNTRY_CODE_IS';

    public const IT = 'COUNTRY_CODE_IT';

    public const JE = 'COUNTRY_CODE_JE';

    public const JM = 'COUNTRY_CODE_JM';

    public const JO = 'COUNTRY_CODE_JO';

    public const JP = 'COUNTRY_CODE_JP';

    public const KE = 'COUNTRY_CODE_KE';

    public const KG = 'COUNTRY_CODE_KG';

    public const KH = 'COUNTRY_CODE_KH';

    public const KI = 'COUNTRY_CODE_KI';

    public const KM = 'COUNTRY_CODE_KM';

    public const KN = 'COUNTRY_CODE_KN';

    public const KP = 'COUNTRY_CODE_KP';

    public const KR = 'COUNTRY_CODE_KR';

    public const KW = 'COUNTRY_CODE_KW';

    public const KY = 'COUNTRY_CODE_KY';

    public const KZ = 'COUNTRY_CODE_KZ';

    public const LA = 'COUNTRY_CODE_LA';

    public const LB = 'COUNTRY_CODE_LB';

    public const LC = 'COUNTRY_CODE_LC';

    public const LI = 'COUNTRY_CODE_LI';

    public const LK = 'COUNTRY_CODE_LK';

    public const LR = 'COUNTRY_CODE_LR';

    public const LS = 'COUNTRY_CODE_LS';

    public const LT = 'COUNTRY_CODE_LT';

    public const LU = 'COUNTRY_CODE_LU';

    public const LV = 'COUNTRY_CODE_LV';

    public const LY = 'COUNTRY_CODE_LY';

    public const MA = 'COUNTRY_CODE_MA';

    public const MC = 'COUNTRY_CODE_MC';

    public const MD = 'COUNTRY_CODE_MD';

    public const ME = 'COUNTRY_CODE_ME';

    public const MF = 'COUNTRY_CODE_MF';

    public const MG = 'COUNTRY_CODE_MG';

    public const MH = 'COUNTRY_CODE_MH';

    public const MK = 'COUNTRY_CODE_MK';

    public const ML = 'COUNTRY_CODE_ML';

    public const MM = 'COUNTRY_CODE_MM';

    public const MN = 'COUNTRY_CODE_MN';

    public const MO = 'COUNTRY_CODE_MO';

    public const MP = 'COUNTRY_CODE_MP';

    public const MQ = 'COUNTRY_CODE_MQ';

    public const MR = 'COUNTRY_CODE_MR';

    public const MS = 'COUNTRY_CODE_MS';

    public const MT = 'COUNTRY_CODE_MT';

    public const MU = 'COUNTRY_CODE_MU';

    public const MV = 'COUNTRY_CODE_MV';

    public const MW = 'COUNTRY_CODE_MW';

    public const MX = 'COUNTRY_CODE_MX';

    public const MY = 'COUNTRY_CODE_MY';

    public const MZ = 'COUNTRY_CODE_MZ';

    public const NA = 'COUNTRY_CODE_NA';

    public const NC = 'COUNTRY_CODE_NC';

    public const NE = 'COUNTRY_CODE_NE';

    public const NF = 'COUNTRY_CODE_NF';

    public const NG = 'COUNTRY_CODE_NG';

    public const NI = 'COUNTRY_CODE_NI';

    public const NL = 'COUNTRY_CODE_NL';

    public const NO = 'COUNTRY_CODE_NO';

    public const NP = 'COUNTRY_CODE_NP';

    public const NR = 'COUNTRY_CODE_NR';

    public const NU = 'COUNTRY_CODE_NU';

    public const NZ = 'COUNTRY_CODE_NZ';

    public const OM = 'COUNTRY_CODE_OM';

    public const PA = 'COUNTRY_CODE_PA';

    public const PE = 'COUNTRY_CODE_PE';

    public const PF = 'COUNTRY_CODE_PF';

    public const PG = 'COUNTRY_CODE_PG';

    public const PH = 'COUNTRY_CODE_PH';

    public const PK = 'COUNTRY_CODE_PK';

    public const PL = 'COUNTRY_CODE_PL';

    public const PM = 'COUNTRY_CODE_PM';

    public const PN = 'COUNTRY_CODE_PN';

    public const PR = 'COUNTRY_CODE_PR';

    public const PS = 'COUNTRY_CODE_PS';

    public const PT = 'COUNTRY_CODE_PT';

    public const PW = 'COUNTRY_CODE_PW';

    public const PY = 'COUNTRY_CODE_PY';

    public const QA = 'COUNTRY_CODE_QA';

    public const RE = 'COUNTRY_CODE_RE';

    public const RO = 'COUNTRY_CODE_RO';

    public const RS = 'COUNTRY_CODE_RS';

    public const RU = 'COUNTRY_CODE_RU';

    public const RW = 'COUNTRY_CODE_RW';

    public const SA = 'COUNTRY_CODE_SA';

    public const SB = 'COUNTRY_CODE_SB';

    public const SC = 'COUNTRY_CODE_SC';

    public const SD = 'COUNTRY_CODE_SD';

    public const SE = 'COUNTRY_CODE_SE';

    public const SG = 'COUNTRY_CODE_SG';

    public const SH = 'COUNTRY_CODE_SH';

    public const SI = 'COUNTRY_CODE_SI';

    public const SJ = 'COUNTRY_CODE_SJ';

    public const SK = 'COUNTRY_CODE_SK';

    public const SL = 'COUNTRY_CODE_SL';

    public const SM = 'COUNTRY_CODE_SM';

    public const SN = 'COUNTRY_CODE_SN';

    public const SO = 'COUNTRY_CODE_SO';

    public const SR = 'COUNTRY_CODE_SR';

    public const SS = 'COUNTRY_CODE_SS';

    public const ST = 'COUNTRY_CODE_ST';

    public const SV = 'COUNTRY_CODE_SV';

    public const SX = 'COUNTRY_CODE_SX';

    public const SY = 'COUNTRY_CODE_SY';

    public const SZ = 'COUNTRY_CODE_SZ';

    public const TC = 'COUNTRY_CODE_TC';

    public const TD = 'COUNTRY_CODE_TD';

    public const TF = 'COUNTRY_CODE_TF';

    public const TG = 'COUNTRY_CODE_TG';

    public const TH = 'COUNTRY_CODE_TH';

    public const TJ = 'COUNTRY_CODE_TJ';

    public const TK = 'COUNTRY_CODE_TK';

    public const TL = 'COUNTRY_CODE_TL';

    public const TM = 'COUNTRY_CODE_TM';

    public const TN = 'COUNTRY_CODE_TN';

    public const TO = 'COUNTRY_CODE_TO';

    public const TR = 'COUNTRY_CODE_TR';

    public const TT = 'COUNTRY_CODE_TT';

    public const TV = 'COUNTRY_CODE_TV';

    public const TW = 'COUNTRY_CODE_TW';

    public const TZ = 'COUNTRY_CODE_TZ';

    public const UA = 'COUNTRY_CODE_UA';

    public const UG = 'COUNTRY_CODE_UG';

    public const UM = 'COUNTRY_CODE_UM';

    public const US = 'COUNTRY_CODE_US';

    public const UY = 'COUNTRY_CODE_UY';

    public const UZ = 'COUNTRY_CODE_UZ';

    public const VA = 'COUNTRY_CODE_VA';

    public const VC = 'COUNTRY_CODE_VC';

    public const VE = 'COUNTRY_CODE_VE';

    public const VG = 'COUNTRY_CODE_VG';

    public const VI = 'COUNTRY_CODE_VI';

    public const VN = 'COUNTRY_CODE_VN';

    public const VU = 'COUNTRY_CODE_VU';

    public const WF = 'COUNTRY_CODE_WF';

    public const WS = 'COUNTRY_CODE_WS';

    public const YE = 'COUNTRY_CODE_YE';

    public const YT = 'COUNTRY_CODE_YT';

    public const ZA = 'COUNTRY_CODE_ZA';

    public const ZM = 'COUNTRY_CODE_ZM';

    public const ZW = 'COUNTRY_CODE_ZW';

    public const XK = 'COUNTRY_CODE_XK';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::AD,
            self::AE,
            self::AF,
            self::AG,
            self::AI,
            self::AL,
            self::AM,
            self::AO,
            self::AQ,
            self::AR,
            self::_AS,
            self::AT,
            self::AU,
            self::AW,
            self::AX,
            self::AZ,
            self::BA,
            self::BB,
            self::BD,
            self::BE,
            self::BF,
            self::BG,
            self::BH,
            self::BI,
            self::BJ,
            self::BL,
            self::BM,
            self::BN,
            self::BO,
            self::BQ,
            self::BR,
            self::BS,
            self::BT,
            self::BV,
            self::BW,
            self::BY,
            self::BZ,
            self::CA,
            self::CC,
            self::CD,
            self::CF,
            self::CG,
            self::CH,
            self::CI,
            self::CK,
            self::CL,
            self::CM,
            self::CN,
            self::CO,
            self::CR,
            self::CU,
            self::CV,
            self::CW,
            self::CX,
            self::CY,
            self::CZ,
            self::DE,
            self::DJ,
            self::DK,
            self::DM,
            self::_DO,
            self::DZ,
            self::EC,
            self::EE,
            self::EG,
            self::EH,
            self::ER,
            self::ES,
            self::ET,
            self::FI,
            self::FJ,
            self::FK,
            self::FM,
            self::FO,
            self::FR,
            self::GA,
            self::GB,
            self::GD,
            self::GE,
            self::GF,
            self::GG,
            self::GH,
            self::GI,
            self::GL,
            self::GM,
            self::GN,
            self::GP,
            self::GQ,
            self::GR,
            self::GS,
            self::GT,
            self::GU,
            self::GW,
            self::GY,
            self::HK,
            self::HM,
            self::HN,
            self::HR,
            self::HT,
            self::HU,
            self::ID,
            self::IE,
            self::IL,
            self::IM,
            self::IN,
            self::IO,
            self::IQ,
            self::IR,
            self::IS,
            self::IT,
            self::JE,
            self::JM,
            self::JO,
            self::JP,
            self::KE,
            self::KG,
            self::KH,
            self::KI,
            self::KM,
            self::KN,
            self::KP,
            self::KR,
            self::KW,
            self::KY,
            self::KZ,
            self::LA,
            self::LB,
            self::LC,
            self::LI,
            self::LK,
            self::LR,
            self::LS,
            self::LT,
            self::LU,
            self::LV,
            self::LY,
            self::MA,
            self::MC,
            self::MD,
            self::ME,
            self::MF,
            self::MG,
            self::MH,
            self::MK,
            self::ML,
            self::MM,
            self::MN,
            self::MO,
            self::MP,
            self::MQ,
            self::MR,
            self::MS,
            self::MT,
            self::MU,
            self::MV,
            self::MW,
            self::MX,
            self::MY,
            self::MZ,
            self::NA,
            self::NC,
            self::NE,
            self::NF,
            self::NG,
            self::NI,
            self::NL,
            self::NO,
            self::NP,
            self::NR,
            self::NU,
            self::NZ,
            self::OM,
            self::PA,
            self::PE,
            self::PF,
            self::PG,
            self::PH,
            self::PK,
            self::PL,
            self::PM,
            self::PN,
            self::PR,
            self::PS,
            self::PT,
            self::PW,
            self::PY,
            self::QA,
            self::RE,
            self::RO,
            self::RS,
            self::RU,
            self::RW,
            self::SA,
            self::SB,
            self::SC,
            self::SD,
            self::SE,
            self::SG,
            self::SH,
            self::SI,
            self::SJ,
            self::SK,
            self::SL,
            self::SM,
            self::SN,
            self::SO,
            self::SR,
            self::SS,
            self::ST,
            self::SV,
            self::SX,
            self::SY,
            self::SZ,
            self::TC,
            self::TD,
            self::TF,
            self::TG,
            self::TH,
            self::TJ,
            self::TK,
            self::TL,
            self::TM,
            self::TN,
            self::TO,
            self::TR,
            self::TT,
            self::TV,
            self::TW,
            self::TZ,
            self::UA,
            self::UG,
            self::UM,
            self::US,
            self::UY,
            self::UZ,
            self::VA,
            self::VC,
            self::VE,
            self::VG,
            self::VI,
            self::VN,
            self::VU,
            self::WF,
            self::WS,
            self::YE,
            self::YT,
            self::ZA,
            self::ZM,
            self::ZW,
            self::XK
        ];
    }
}



<?php
/**
 * shaogaojie@gmail.com
 * 2020-07-07 11:36:04
 * 图像效果增强服务
 */
namespace Qbhy\BaiduAIP;


class ImageProcess extends Api
{
    /**
     * 图像无损放大 image_quality_enhance api url
     * @var string
     */
    const imageQualityEnhanceUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/image_quality_enhance';

    /**
     * 图像去雾 dehaze api url
     * @var string
     */
    const dehazeUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/dehaze';

    /**
     * 图像对比度增强 contrast_enhance api url
     * @var string
     */
    const contrastEnhanceUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/contrast_enhance';

    /**
     * 黑白图像上色 colourize api url
     * @var string
     */
    const colourizeUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/colourize';

    /**
     * 拉伸图像恢复 stretch_restore api url
     * @var string
     */
    const tretchRestoreUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/stretch_restore';

    const selfieAnimeUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/selfie_anime';


    /**
     * 图像无损放大接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function imageQualityEnhance($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::imageQualityEnhanceUrl, $data);
    }

    /**
     * 图像去雾接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function dehaze($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::dehazeUrl, $data);
    }

    /**
     * 图像对比度增强接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function contrastEnhance($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::contrastEnhanceUrl, $data);
    }

    /**
     * 黑白图像上色接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function colourize($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::colourizeUrl, $data);
    }

    /**
     * 拉伸图像恢复接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function stretchRestore($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::stretchRestoreUrl, $data);
    }

    /**
     * 人像动漫化接口
     *
     * @param string $image - 需要处理的图片base64编码后大小不超过4M，最短边至少64px，最长边最大4096px，长宽比3：1以内。注意：图片的base64编码是不包含图片头的，如（data:image/jpg;base64,）
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * type : anime或者anime_mask。前者生成二次元动漫图，后者生成戴口罩的二次元动漫人像
     * mask_id : 在type参数填入anime_mask时生效，1～8之间的整数，用于指定所使用的口罩的编码。type参数没有填入anime_mask，或mask_id 为空时，生成不戴口罩的二次元动漫图。
     * @return array
     */
    public function selfieAnime($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::selfieAnimeUrl, $data);
    }

}
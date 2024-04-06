<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ResponseApiTrait
{


    public function paginationResponse($message, $data , $additionalParamKey = "" , $additionalParamData = [] )
    {
        $statusCode = 200;
        if( $additionalParamKey !=""){
            return response()->json([
                'message' => $message,
                'error' => false,
                'code' => $statusCode,
                'total' => $data->total(),
                'has_pages'=> $data->hasPages()	,
                'current_page'=> $data->currentPage()	,
                'last_page'=> $data->lastPage()	,
                'data' =>  $data,
                $additionalParamKey => $additionalParamData
            ], $statusCode);
        }
        return response()->json([
            'message' => $message,
            'error' => false,
            'code' => $statusCode,
            'total' => $data->total(),
            'has_pages'=> $data->hasPages()	,
            'current_page'=> $data->currentPage()	,
            'last_page'=> $data->lastPage()	,
            'data' =>  $data,
        ], $statusCode);
    }

    /**
     * Core of response
     * 
     * @param   string          $message
     * @param   array|object    $data
     * @param   integer         $statusCode  
     * @param   boolean         $isSuccess
     */
    public function coreResponse($message, $data, $statusCode, $isSuccess = true, $error_messages = null)
    {
        if (empty($data)) {
            $data = [];
        }
        // Check the params
        if (!$message) return response()->json(['message' => 'Message is required'], 500);

        // Send the response
        if ($isSuccess) {
            return response()->json([
                'message' => $message,
                'error' => false,
                'code' => $statusCode,
                'data' => $data
            ], $statusCode);
        } else {
            return response()->json([
                'message' => $message,
                'error' => true,
                'error_messages' => $error_messages,
                'code' => $statusCode,
            ], $statusCode);
        }
    }

    /**
     * Send any success response
     * 
     * @param   string          $message
     * @param   array|object    $data
     * @param   integer         $statusCode
     */
    public function success($message, $data, $statusCode = 200)
    {
        return $this->coreResponse($message, $data, $statusCode);
    }

    /**
     * Send any error response
     * 
     * @param   string          $message
     * @param   integer         $statusCode    
     */
    public function error($message, $statusCode = 200, $error_messages = null)
    {
        $error_messages = $error_messages ? $error_messages : (object) [];
        if (env('SHOW_EXCEPTION') == false) {
            $error_messages = 'Something went wrong ,please try again later.';
            $message = 'Something went wrong ,please try again later.';
        }
        return $this->coreResponse($message, null, $statusCode, false, $error_messages);
    }

    /**
     * Send any error response
     * 
     * @param   string          $message
     * @param   integer         $statusCode    
     */
    public function debug($data, $debugQuery = null)
    {
        if ($debugQuery) {
            $data['query'] = \DB::getQueryLog();
        }
        return $this->coreResponse('debug', $data, 200, true);
    }

    public function exceptionMessage($message, $data = [],  $statusCode = 500)
    {
        if (env('SHOW_EXCEPTION') == false) {
            $message = 'Something went wrong ,please try again later.';
        }
        $data['exception'] = true;
        return $this->coreResponse($message, $data, $statusCode, false);
    }

    public function prepareDataArray($requestAll)
    {
        $dataArray = [];
        unset($requestAll['client']);
        unset($requestAll['campaign']);
        unset($requestAll['channel']);
        if (count($requestAll) > 0) {
            foreach ($requestAll as $key => $request) {
                $dataArray[$key] = $request;
            }
        }
        return $dataArray;
    }

    public function validCellNumber($str)
    {
        if (strlen($str) == 10 && preg_match("/^3[0-9]{9}/", $str)) {
            return TRUE;
        }
        if (strlen($str) == 11 && preg_match("/^03[0-9]{9}/", $str)) {
            return TRUE;
        }
        if (strlen($str) == 12 && preg_match("/^923[0-9]{9}/", $str)) {
            return TRUE;
        }
        if (strlen($str) == 13 && preg_match("/^0923[0-9]{9}/", $str)) {
            return TRUE;
        }
        return FALSE;
    }

    public function manageResponseWhatsAppChat($data)
    {
        return [
            'id' => $data->id,
            'created_at' => date("Y-m-d H:i:s", $data->created_at),
            // 'customer_id' => $data->extension ? $data->to_id : $data->from_id,
            'owner_number' => $data->owner_number,
            'profile_id' => $data->to_number,
            'customer_name' => $data->extension ? $data->to_name : $data->from_name,
            'message' => $data->msg_text,
            'agent_id' => $data->extension,
            'attachment_url' => $this->make_attachment_url($data->attachment_url, $data->attachment_method),
            'attachment_type' => $data->attachment_type,
        ];
    }
    public function manageResponseWApp($data)
    {
        return [
            'chat_id' => $data->id,
            'created_at' => date("Y-m-d H:i:s", $data->created_at),
            'phone_number' => $data->owner_number,
            // 'profile_id' => $data->to_number,
            'customer_name' => $data->from_name,
            'message' => $data->msg_text,
            // 'attachment_url' => $this->make_attachment_url($data->attachment_url, $data->attachment_method),
            // 'attachment_type' => $data->attachment_type,
        ];
    }

    public function downloadBaseEncodeImage($image_64, $extension)
    {
        //composer require --dev league/flysystem=^1.1
        // $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf
        // find substring fro replace here eg: data:image/png;base64,

        $getMimeType = $this->base64_mimetype($image_64);
        $extension = $this->mime2ext($getMimeType);
        // $firstCheck = ['pdf', 'mp3', 'WebP'];
        // if (in_array($extension, $firstCheck)) {
        // $image = str_replace(' ', '+', $image_64); 
        // $image = $image_64;
        // } else {
        // $replace = substr($image_64, 0, strpos($image_64, ',') + 1);
        // $image = str_replace($replace, '', $image_64);
        // $image = str_replace(' ', '+', $image);
        // $image = $image_64;
        // }
        $image = $image_64;
        $path = env('FILE_PATH', '/var/www/social_media');
        $attachment_type = $extension == 'mp3' ? 'audio' : 'image';
        $path .= "/" . $this->profile->client_id . "/" . $this->profile->channel . "/" . date("Y") . "/" . date("m") . "/" . date("d");

        $attachment_url = $path . "/" . random_int(1000, 99999) . "_" . time() . "." . $extension;
        if (!is_dir($path)) {
            // mkdir($path, 0755, true);
            mkdir($path, 0777, true);
        }
        file_put_contents($attachment_url,  base64_decode($image));
        return [
            'extension' => $extension,
            'getMimeType' => $getMimeType,
            'attachment_url' => $attachment_url
        ];
    }
    /**
     * @param $str
     * @return bool
     */
    public function isValid64base($image)
    {
        if (base64_decode($image, true) !== false) {
            return true;
        } else {
            $allowedExtensions = ['png', 'jpg', 'jpeg'];
            // check base64 format
            $explode = explode(',', $image);
            if (count($explode) !== 2) {
                return false;
            }
            //https://stackoverflow.com/a/11154248/4830771
            if (!preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $explode[1])) {
                return false;
            }
            // check if type is allowed
            $format = str_replace(
                ['data:image/', ';', 'base64'],
                ['', '', '',],
                $explode[0]
            );
            if (!in_array($format, $allowedExtensions)) {
                return false;
            }
            return true;
        }
        return false;
    }

    function base64_mimetype(string $encoded, bool $strict = true): ?string
    {
        if ($decoded = base64_decode($encoded, $strict)) {
            $tmpFile = tmpFile();
            $tmpFilename = stream_get_meta_data($tmpFile)['uri'];
            file_put_contents($tmpFilename, $decoded);
            return mime_content_type($tmpFilename) ?: null;
        }
        return null;
    }
    function mime2ext($mime)
    {
        $mime_map = [
            'video/3gpp2'                                                               => '3g2',
            'video/3gp'                                                                 => '3gp',
            'video/3gpp'                                                                => '3gp',
            'application/x-compressed'                                                  => '7zip',
            'audio/x-acc'                                                               => 'aac',
            'audio/ac3'                                                                 => 'ac3',
            'application/postscript'                                                    => 'ai',
            'audio/x-aiff'                                                              => 'aif',
            'audio/aiff'                                                                => 'aif',
            'audio/x-au'                                                                => 'au',
            'video/x-msvideo'                                                           => 'avi',
            'video/msvideo'                                                             => 'avi',
            'video/avi'                                                                 => 'avi',
            'application/x-troff-msvideo'                                               => 'avi',
            'application/macbinary'                                                     => 'bin',
            'application/mac-binary'                                                    => 'bin',
            'application/x-binary'                                                      => 'bin',
            'application/x-macbinary'                                                   => 'bin',
            'image/bmp'                                                                 => 'bmp',
            'image/x-bmp'                                                               => 'bmp',
            'image/x-bitmap'                                                            => 'bmp',
            'image/x-xbitmap'                                                           => 'bmp',
            'image/x-win-bitmap'                                                        => 'bmp',
            'image/x-windows-bmp'                                                       => 'bmp',
            'image/ms-bmp'                                                              => 'bmp',
            'image/x-ms-bmp'                                                            => 'bmp',
            'application/bmp'                                                           => 'bmp',
            'application/x-bmp'                                                         => 'bmp',
            'application/x-win-bitmap'                                                  => 'bmp',
            'application/cdr'                                                           => 'cdr',
            'application/coreldraw'                                                     => 'cdr',
            'application/x-cdr'                                                         => 'cdr',
            'application/x-coreldraw'                                                   => 'cdr',
            'image/cdr'                                                                 => 'cdr',
            'image/x-cdr'                                                               => 'cdr',
            'zz-application/zz-winassoc-cdr'                                            => 'cdr',
            'application/mac-compactpro'                                                => 'cpt',
            'application/pkix-crl'                                                      => 'crl',
            'application/pkcs-crl'                                                      => 'crl',
            'application/x-x509-ca-cert'                                                => 'crt',
            'application/pkix-cert'                                                     => 'crt',
            'text/css'                                                                  => 'css',
            'text/x-comma-separated-values'                                             => 'csv',
            'text/comma-separated-values'                                               => 'csv',
            'application/vnd.msexcel'                                                   => 'csv',
            'application/x-director'                                                    => 'dcr',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'   => 'docx',
            'application/x-dvi'                                                         => 'dvi',
            'message/rfc822'                                                            => 'eml',
            'application/x-msdownload'                                                  => 'exe',
            'video/x-f4v'                                                               => 'f4v',
            'audio/x-flac'                                                              => 'flac',
            'video/x-flv'                                                               => 'flv',
            'image/gif'                                                                 => 'gif',
            'application/gpg-keys'                                                      => 'gpg',
            'application/x-gtar'                                                        => 'gtar',
            'application/x-gzip'                                                        => 'gzip',
            'application/mac-binhex40'                                                  => 'hqx',
            'application/mac-binhex'                                                    => 'hqx',
            'application/x-binhex40'                                                    => 'hqx',
            'application/x-mac-binhex40'                                                => 'hqx',
            'text/html'                                                                 => 'html',
            'image/x-icon'                                                              => 'ico',
            'image/x-ico'                                                               => 'ico',
            'image/vnd.microsoft.icon'                                                  => 'ico',
            'text/calendar'                                                             => 'ics',
            'application/java-archive'                                                  => 'jar',
            'application/x-java-application'                                            => 'jar',
            'application/x-jar'                                                         => 'jar',
            'image/jp2'                                                                 => 'jp2',
            'video/mj2'                                                                 => 'jp2',
            'image/jpx'                                                                 => 'jp2',
            'image/jpm'                                                                 => 'jp2',
            'image/jpeg'                                                                => 'jpeg',
            'image/pjpeg'                                                               => 'jpeg',
            'application/x-javascript'                                                  => 'js',
            'application/json'                                                          => 'json',
            'text/json'                                                                 => 'json',
            'application/vnd.google-earth.kml+xml'                                      => 'kml',
            'application/vnd.google-earth.kmz'                                          => 'kmz',
            'text/x-log'                                                                => 'log',
            'audio/x-m4a'                                                               => 'm4a',
            'audio/mp4'                                                                 => 'm4a',
            'application/vnd.mpegurl'                                                   => 'm4u',
            'audio/midi'                                                                => 'mid',
            'application/vnd.mif'                                                       => 'mif',
            'video/quicktime'                                                           => 'mov',
            'video/x-sgi-movie'                                                         => 'movie',
            'audio/mpeg'                                                                => 'mp3',
            'audio/mpg'                                                                 => 'mp3',
            'audio/mpeg3'                                                               => 'mp3',
            'audio/mp3'                                                                 => 'mp3',
            'video/mp4'                                                                 => 'mp4',
            'video/mpeg'                                                                => 'mpeg',
            'application/oda'                                                           => 'oda',
            'audio/ogg'                                                                 => 'ogg',
            'video/ogg'                                                                 => 'ogg',
            'application/ogg'                                                           => 'ogg',
            'font/otf'                                                                  => 'otf',
            'application/x-pkcs10'                                                      => 'p10',
            'application/pkcs10'                                                        => 'p10',
            'application/x-pkcs12'                                                      => 'p12',
            'application/x-pkcs7-signature'                                             => 'p7a',
            'application/pkcs7-mime'                                                    => 'p7c',
            'application/x-pkcs7-mime'                                                  => 'p7c',
            'application/x-pkcs7-certreqresp'                                           => 'p7r',
            'application/pkcs7-signature'                                               => 'p7s',
            'application/pdf'                                                           => 'pdf',
            'application/octet-stream'                                                  => 'pdf',
            'application/x-x509-user-cert'                                              => 'pem',
            'application/x-pem-file'                                                    => 'pem',
            'application/pgp'                                                           => 'pgp',
            'application/x-httpd-php'                                                   => 'php',
            'application/php'                                                           => 'php',
            'application/x-php'                                                         => 'php',
            'text/php'                                                                  => 'php',
            'text/x-php'                                                                => 'php',
            'application/x-httpd-php-source'                                            => 'php',
            'image/png'                                                                 => 'png',
            'image/x-png'                                                               => 'png',
            'application/powerpoint'                                                    => 'ppt',
            'application/vnd.ms-powerpoint'                                             => 'ppt',
            'application/vnd.ms-office'                                                 => 'ppt',
            'application/msword'                                                        => 'doc',
            'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx',
            'application/x-photoshop'                                                   => 'psd',
            'image/vnd.adobe.photoshop'                                                 => 'psd',
            'audio/x-realaudio'                                                         => 'ra',
            'audio/x-pn-realaudio'                                                      => 'ram',
            'application/x-rar'                                                         => 'rar',
            'application/rar'                                                           => 'rar',
            'application/x-rar-compressed'                                              => 'rar',
            'audio/x-pn-realaudio-plugin'                                               => 'rpm',
            'application/x-pkcs7'                                                       => 'rsa',
            'text/rtf'                                                                  => 'rtf',
            'text/richtext'                                                             => 'rtx',
            'video/vnd.rn-realvideo'                                                    => 'rv',
            'application/x-stuffit'                                                     => 'sit',
            'application/smil'                                                          => 'smil',
            'text/srt'                                                                  => 'srt',
            'image/svg+xml'                                                             => 'svg',
            'application/x-shockwave-flash'                                             => 'swf',
            'application/x-tar'                                                         => 'tar',
            'application/x-gzip-compressed'                                             => 'tgz',
            'image/tiff'                                                                => 'tiff',
            'font/ttf'                                                                  => 'ttf',
            'text/plain'                                                                => 'txt',
            'text/x-vcard'                                                              => 'vcf',
            'application/videolan'                                                      => 'vlc',
            'text/vtt'                                                                  => 'vtt',
            'audio/x-wav'                                                               => 'wav',
            'audio/wave'                                                                => 'wav',
            'audio/wav'                                                                 => 'wav',
            'application/wbxml'                                                         => 'wbxml',
            'video/webm'                                                                => 'webm',
            'image/webp'                                                                => 'webp',
            'audio/x-ms-wma'                                                            => 'wma',
            'application/wmlc'                                                          => 'wmlc',
            'video/x-ms-wmv'                                                            => 'wmv',
            'video/x-ms-asf'                                                            => 'wmv',
            'font/woff'                                                                 => 'woff',
            'font/woff2'                                                                => 'woff2',
            'application/xhtml+xml'                                                     => 'xhtml',
            'application/excel'                                                         => 'xl',
            'application/msexcel'                                                       => 'xls',
            'application/x-msexcel'                                                     => 'xls',
            'application/x-ms-excel'                                                    => 'xls',
            'application/x-excel'                                                       => 'xls',
            'application/x-dos_ms_excel'                                                => 'xls',
            'application/xls'                                                           => 'xls',
            'application/x-xls'                                                         => 'xls',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'         => 'xlsx',
            'application/vnd.ms-excel'                                                  => 'xlsx',
            'application/xml'                                                           => 'xml',
            'text/xml'                                                                  => 'xml',
            'text/xsl'                                                                  => 'xsl',
            'application/xspf+xml'                                                      => 'xspf',
            'application/x-compress'                                                    => 'z',
            'application/x-zip'                                                         => 'zip',
            'application/zip'                                                           => 'zip',
            'application/x-zip-compressed'                                              => 'zip',
            'application/s-compressed'                                                  => 'zip',
            'multipart/x-zip'                                                           => 'zip',
            'text/x-scriptzsh'                                                          => 'zsh',
        ];
        return isset($mime_map[$mime]) ? $mime_map[$mime] : $mime;
    }
}

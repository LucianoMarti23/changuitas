<?php
namespace App\Services\Contracts;




use Illuminate\Http\Request;

interface UserProfileServiceInterface
{
    public function createProfile(Request $request);
    public function updateProfile(Request $request);
    public function getProfile($userId);


    public function updateProfileSummary($profileId , Request $request);


    public function updateProfileEducation($profileId , Request $request);


    public function updateProfileSkill($profileId , Request $request);

    public function showPubs();


    public function uploadPicture(Request $request);

    public function showPostulants($jobId);


    public function deletePicture();

    public function showProfiles();
}
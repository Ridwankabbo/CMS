@extends('layouts.profile-options')

@section('user-options')
    <section id="settings-section" class="content-section ">
        <h2 class="h4 fw-bold text-dark">Settings</h2>
        <p>Manage your CMS preferences and configurations.</p>
        <form>
            <div class="mb-3 form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                <label class="form-check-label" for="flexSwitchCheckDefault">Enable Notifications</label>
            </div>
            <div class="mb-3">
                <label for="siteTitle" class="form-label">Site Title</label>
                <input type="text" class="form-control" id="siteTitle" value="My Awesome Blog">
            </div>
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>
    </section>

@endsection